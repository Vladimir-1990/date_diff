<?php

class MyDate
{
	const LEAP_YEAR_DAYS = 366;
	const REGULAR_YEAR_DAYS = 365;

	private static $isLeapYearStart;
	private static $isLeapYearEnd;

	private static $startDateObject;
	private static $endDateObject;

	static $days;
	static $months;
	static $years;
	static $totalDays;
	static $inverted;

	/**
	 * Get the date intervals between two given dates
	 *
	 * @param  string $start
	 * @param  string $end
	 * @return object
	 */
	public static function diff($start, $end)
	{
		self::$startDateObject = self::dateObject($start);
		self::$endDateObject = self::dateObject($end);

		self::$isLeapYearStart = self::isLeapYear(self::$startDateObject->year);
		self::$isLeapYearEnd = self::isLeapYear(self::$endDateObject->year);

		$diff = self::calculate();

		$totalDays = self::totalDays();

		return self::returnData($diff['year'], $diff['month'], $diff['day'], $totalDays, self::$inverted);
	}

	/**
	 * Get year, month and day between two dates
	 *
	 * @return array
	 */
	static private function calculate()
	{
		$diff = array();
		$dates = self::rearrange();

		$smallDate = self::dateObject($dates['a']);
		$bigDate = self::dateObject($dates['b']);

		$yearDiff = $bigDate->year - $smallDate->year;
		$monthDiff = $bigDate->month - $smallDate->month;
		$dayDiff = $bigDate->day - $smallDate->day;

		$years = $yearDiff;
		$months = $monthDiff;
		$days = $dayDiff;

		if ($monthDiff < 0) {
			$years -= 1;
			$months = 12 - abs($monthDiff);
		} else if ($monthDiff >= 0) {
			$years = $yearDiff;
			$months = $monthDiff;
		}

		if ($dayDiff < 0) {
			$smallDateDaysInMonth = self::daysInMonth($smallDate->month, self::isLeapYear($smallDate->year));
			$days = ($smallDateDaysInMonth - $smallDate->day) + $bigDate->day;
			$months -= 1;
		} else if ($dayDiff >= 0) {
			$days = $dayDiff;
		}

		if ($dayDiff < 0 && $monthDiff == 0) {
			$months = 11;
			$years -= 1;
		}

		$diff['year'] = $years;
		$diff['month'] = $months;
		$diff['day'] = $days;

		return $diff;
	}

	/**
	 * Get total days between two dates
	 *
	 * @return int
	 */
	static private function totalDays()
	{
		$startYearDays = self::$startDateObject->year * self::REGULAR_YEAR_DAYS;
		$endYearDays = self::$endDateObject->year * self::REGULAR_YEAR_DAYS;

		$extraDaysStart = 0;
		$extraDaysEnd = 0;
		$startMonthDays = 0;
		$endMonthDays = 0;

		for ($year = 1753; $year < self::$startDateObject->year; $year++) {
			if (self::isLeapYear($year)) {
				$extraDaysStart += 1;
			}
		}

		for ($year = 1753; $year < self::$endDateObject->year; $year++) {
			if (self::isLeapYear($year)) {
				$extraDaysEnd += 1;
			}
		}

		for ($month = 1; $month < self::$startDateObject->month; $month++) {
			$totalDays = self::daysInMonth($month, self::$isLeapYearStart);
			$startMonthDays += $totalDays;
		}

		for ($month = 1; $month < self::$endDateObject->month; $month++) {
			$totalDays = self::daysInMonth($month, self::$isLeapYearEnd);
			$endMonthDays += $totalDays;
		}

		if (self::$inverted)
			$totalDays = ($startYearDays + $startMonthDays + $extraDaysStart + self::$startDateObject->day) - ($endYearDays + $endMonthDays + $extraDaysEnd + self::$endDateObject->day);
		else
			$totalDays = ($endYearDays + $endMonthDays + $extraDaysEnd + self::$endDateObject->day) - ($startYearDays + $startMonthDays + $extraDaysStart + self::$startDateObject->day);

		return (int)$totalDays;
	}

	/**
	 * Figure out which dates is bigger and rearrange them in order bigger to smaller
	 *
	 * @return array
	 */
	static private function rearrange()
	{
		$dates = array();

		if (self::$startDateObject->year > self::$endDateObject->year) {
			self::$inverted = 1;
		} else if (self::$startDateObject->year < self::$endDateObject->year) {
			self::$inverted = 0;
		} else if (self::$startDateObject->month > self::$endDateObject->month) {
			self::$inverted = 1;
		} else if (self::$startDateObject->month < self::$endDateObject->month) {
			self::$inverted = 0;
		} else if (self::$startDateObject->day > self::$endDateObject->day) {
			self::$inverted = 1;
		} elseif (self::$startDateObject->day < self::$endDateObject->day) {
			self::$inverted = 0;
		}

		if (self::$inverted != 0) {
			$dates['a'] = self::$endDateObject->year . "/" . self::$endDateObject->month . "/" . self::$endDateObject->day;
			$dates['b'] = self::$startDateObject->year . "/" . self::$startDateObject->month . "/" . self::$startDateObject->day;
		} else {
			$dates['a'] = self::$startDateObject->year . "/" . self::$startDateObject->month . "/" . self::$startDateObject->day;
			$dates['b'] = self::$endDateObject->year . "/" . self::$endDateObject->month . "/" . self::$endDateObject->day;
		}

		return $dates;
	}

	/**
	 * Parse date
	 *
	 * @param string
	 * @return object
	 */
	static private function dateObject($date)
	{
		$pieces = explode("/", $date);
		return (object)array(
			'year' => (int)$pieces[0],
			'month' => (int)$pieces[1],
			'day' => (int)$pieces[2]
		);
	}

	/**
	 * Is leap year
	 *
	 * @param int
	 * @return bool
	 */
	static private function isLeapYear($year)
	{
		if (($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0)) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Return how many days in a month
	 *
	 * @param int
	 * @param bool
	 * @return int
	 */
	static private function daysInMonth($month, $isLeapYear)
	{
		if ($month === 2) {
			$daysInMonth = 28 + (int)$isLeapYear;
		} else {
			$daysInMonth = 31 - ((($month - 1) % 7) % 2);
		}
		return (int)$daysInMonth;
	}

	/**
	 * Return the final object
	 *
	 * @param int
	 * @param int
	 * @param int
	 * @param int
	 * @param int
	 * @return object
	 */
	static private function returnData($years, $moths, $days, $totalDays, $invert)
	{
		return (object)array(
			'years' => $years,
			'months' => $moths,
			'days' => $days,
			'total_days' => $totalDays,
			'invert' => $invert
		);
	}
}
