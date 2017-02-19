<?php

class MyDateTest extends PHPUnit_Framework_TestCase
{

	public function test2()
	{

		$this->assertDays('2015/3/20', '2017/4/15');

	}

	public function test3()
	{

		$this->assertDays('1990/4/16', '2017/2/18');

	}

	public function customTest1()
	{

		$this->assertDays('2017/4/14', '2017/5/3');

	}

	public function customTest12()
	{

		$this->assertDays("2015/1/20", '2016/5/21');

	}

	public function customTest4()
	{

		$this->assertDays("2017/4/14", "2017/9/3");

	}

	public function customTest2()
	{

		$this->assertDays('2016/11/14', '2017/4/3');

	}

	public function customTest3()
	{

		$this->assertDays('2017/1/2', '2016/12/28');

	}

	public function customTest6()
	{

		$this->assertDays('2017/3/20', '2017/1/21');

	}

	public function customTest7()
	{

		$this->assertDays('2018/4/2', '2017/9/28');

	}

	public function testSimpleTotalDays()
	{

		$this->assertTotalDays('2014/01/01', '2014/01/04');

	}

	public function testSimpleDays()
	{

		$this->assertDays('2014/01/01', '2014/01/04');

	}

	public function testSimpleMonths()
	{

		$this->assertMonths('2014/01/01', '2014/03/01');

	}

	public function testSimpleYears()
	{

		$this->assertYears('2014/01/01', '2015/01/01');

	}

	public function testInvertDayTrue()
	{

		$this->assertInvert('2015/01/02', '2015/01/01');

	}

	public function testInvertMonthTrue()
	{

		$this->assertInvert('2015/02/02', '2015/01/01');

	}

	public function testInvertYearTrue()
	{

		$this->assertInvert('2016/01/01', '2015/01/01');

	}

	public function testInvertDayFalse()
	{

		$this->assertInvert('2015/01/01', '2015/01/02');

	}

	public function testInvertMonthFalse()
	{

		$this->assertInvert('2015/01/01', '2015/02/01');

	}

	public function testInvertYearFalse()
	{

		$this->assertInvert('2015/01/01', '2016/01/01');

	}

	public function testComplexTotalDays()
	{

		$this->assertTotalDays('2013/01/01', '2015/05/15');

	}

	public function testComplexDays()
	{

		$this->assertDays('2013/03/21', '2015/07/31');

	}

	public function testComplexMonths()
	{

		$this->assertMonths('2013/06/15', '2015/03/01');

	}

	public function testComplexYears()
	{

		$this->assertYears('2013/09/13', '2015/07/01');

	}

	public function testLeapYearTotalDays()
	{

	    
		$this->assertTotalDays('2013/01/01', '2017/05/15');

	}

	public function testLeapYearDays()
	{

		$this->assertDays('2013/03/21', '2017/07/31');

	}

	public function testLeapYearMonths()
	{

		$this->assertMonths('2013/06/15', '2017/03/01');

	}

	public function testLeapYearYears()
	{

		$this->assertYears('2013/09/13', '2017/07/01');

	}

	public function testInvertLeapYearTrue()
	{

		$this->assertInvert('2017/03/16', '2013/06/18');

	}

	public function testMultipleLeapYearTotalDays()
	{

		$this->assertTotalDays('2013/01/01', '2029/05/15');

	}

	public function testMultipleLeapYearDays()
	{

		$this->assertDays('2013/03/21', '2028/07/31');

	}

	public function testMultipleLeapYearMonths()
	{

		$this->assertMonths('2013/06/15', '2029/03/01');

	}

	public function testMultipleLeapYearYears()
	{

		$this->assertYears('2013/09/13', '2029/07/01');

	}

	public function testInvertMultipleLeapYearTrue()
	{

		$this->assertInvert('2029/03/16', '2013/06/18');

	}

	public function test1()
	{

		$this->assertInvert('1990/12/14', '2017/02/18');

	}

	public
	function test_0()
	{
		$this->assertInvert("2017/8/8", "2023/8/9");
	}

	public
	function test_1()
	{
		$this->assertYears("2028/8/26", "2017/3/12");
	}

	public
	function test_2()
	{
		$this->assertInvert("2023/11/22", "2026/6/23");
	}

	public
	function test_3()
	{
		$this->assertMonths("2018/11/16", "2015/11/29");
	}

	public
	function test_4()
	{
		$this->assertTotalDays("2029/1/31", "2028/11/1");
	}

	public
	function test_5()
	{
		$this->assertDays("2024/6/2", "2022/5/7");
	}

	public
	function test_6()
	{
		$this->assertMonths("2014/9/7", "2016/11/9");
	}

	public
	function test_7()
	{
		$this->assertDays("2029/1/20", "2030/1/16");
	}

	public
	function test_8()
	{
		$this->assertDays("2017/9/15", "2015/6/24");
	}

	public
	function test_9()
	{
		$this->assertMonths("2020/4/21", "2020/11/10");
	}

	public
	function test_10()
	{
		$this->assertDays("2028/4/29", "2028/3/10");
	}

	public
	function test_11()
	{
		$this->assertTotalDays("2027/12/30", "2013/2/10");
	}

	public
	function test_12()
	{
		$this->assertYears("2020/4/3", "2019/2/1");
	}

	public
	function test_13()
	{
		$this->assertMonths("2016/5/24", "2015/11/18");
	}

	public
	function test_14()
	{
		$this->assertTotalDays("2028/11/14", "2014/1/5");
	}

	public
	function test_15()
	{
		$this->assertTotalDays("2018/7/1", "2028/2/5");
	}

	public
	function test_16()
	{
		$this->assertMonths("2022/1/3", "2021/1/25");
	}

	public
	function test_17()
	{
		$this->assertMonths("2027/6/1", "2028/2/5");
	}

	public
	function test_18()
	{
		$this->assertTotalDays("2013/9/5", "2024/4/5");
	}

	public
	function test_19()
	{
		$this->assertYears("2015/2/25", "2024/2/27");
	}

	public
	function test_20()
	{
		$this->assertInvert("2027/4/9", "2021/1/23");
	}

	public
	function test_21()
	{
		$this->assertTotalDays("2028/9/23", "2020/12/21");
	}

	public
	function test_22()
	{
		$this->assertDays("2026/7/26", "2017/2/1");
	}

	public
	function test_23()
	{
		$this->assertDays("2014/3/10", "2015/11/3");
	}

	public
	function test_24()
	{
		$this->assertMonths("2018/10/13", "2014/2/8");
	}

	public
	function test_25()
	{
		$this->assertMonths("2015/3/25", "2017/10/30");
	}

	public
	function test_26()
	{
		$this->assertDays("2014/4/25", "2023/12/12");
	}

	public
	function test_27()
	{
		$this->assertDays("2013/10/6", "2013/4/17");
	}

	public
	function test_28()
	{
		$this->assertDays("2018/5/17", "2014/1/2");
	}

	public
	function test_29()
	{
		$this->assertYears("2027/8/12", "2029/7/2");
	}

	public
	function test_30()
	{
		$this->assertTotalDays("2017/6/22", "2020/5/2");
	}

	public
	function test_31()
	{
		$this->assertInvert("2024/2/1", "2014/8/27");
	}

	public
	function test_32()
	{
		$this->assertYears("2027/5/30", "2026/1/28");
	}

	public
	function test_33()
	{
		$this->assertDays("2013/11/31", "2016/3/25");
	}

	public
	function test_34()
	{
		$this->assertYears("2025/8/5", "2014/12/17");
	}

	public
	function test_35()
	{
		$this->assertYears("2027/10/5", "2020/4/13");
	}

	public
	function test_36()
	{
		$this->assertMonths("2016/6/14", "2022/1/25");
	}

	public
	function test_37()
	{
		$this->assertTotalDays("2027/4/31", "2022/12/17");
	}

	public
	function test_38()
	{
		$this->assertYears("2026/10/25", "2022/7/8");
	}

	public
	function test_39()
	{
		$this->assertInvert("2028/9/10", "2016/6/10");
	}

	public
	function test_40()
	{
		$this->assertMonths("2017/12/15", "2021/9/18");
	}

	public
	function test_41()
	{
		$this->assertYears("2030/6/20", "2013/3/4");
	}

	public
	function test_42()
	{
		$this->assertTotalDays("2022/11/4", "2022/12/20");
	}

	public
	function test_43()
	{
		$this->assertInvert("2017/4/1", "2025/8/6");
	}

	public
	function test_44()
	{
		$this->assertTotalDays("2020/6/16", "2021/12/3");
	}

	public
	function test_45()
	{
		$this->assertDays("2030/11/8", "2030/1/25");
	}

	public
	function test_46()
	{
		$this->assertTotalDays("2015/6/25", "2017/11/23");
	}

	public
	function test_47()
	{
		$this->assertYears("2020/10/20", "2027/11/8");
	}

	public
	function test_48()
	{
		$this->assertTotalDays("2022/3/28", "2021/7/16");
	}

	public
	function test_49()
	{
		$this->assertTotalDays("2027/2/20", "2015/12/15");
	}

	public
	function test_50()
	{
		$this->assertDays("2014/11/22", "2020/6/31");
	}

	public
	function test_51()
	{
		$this->assertTotalDays("2024/5/8", "2027/6/24");
	}

	public
	function test_52()
	{
		$this->assertYears("2027/8/27", "2028/1/14");
	}

	public
	function test_53()
	{
		$this->assertInvert("2024/11/29", "2017/9/31");
	}

	public
	function test_54()
	{
		$this->assertDays("2027/10/3", "2018/11/5");
	}

	public
	function test_55()
	{
		$this->assertMonths("2030/11/8", "2022/9/14");
	}

	public
	function test_56()
	{
		$this->assertMonths("2027/9/2", "2020/12/7");
	}

	public
	function test_57()
	{
		$this->assertTotalDays("2013/2/7", "2014/8/22");
	}

	public
	function test_58()
	{
		$this->assertYears("2030/5/28", "2026/1/10");
	}

	public
	function test_59()
	{
		$this->assertTotalDays("2021/12/10", "2029/10/6");
	}

	public
	function test_60()
	{
		$this->assertInvert("2029/3/9", "2018/6/15");
	}

	public
	function test_61()
	{
		$this->assertTotalDays("2025/2/16", "2018/7/13");
	}

	public
	function test_62()
	{
		$this->assertInvert("2029/12/26", "2022/11/23");
	}

	public
	function test_63()
	{
		$this->assertTotalDays("2021/2/31", "2025/7/12");
	}

	public
	function test_64()
	{
		$this->assertInvert("2017/12/5", "2027/8/30");
	}

	public
	function test_65()
	{
		$this->assertDays("2018/3/16", "2014/12/9");
	}

	public
	function test_66()
	{
		$this->assertInvert("2014/10/14", "2030/11/2");
	}

	public
	function test_67()
	{
		$this->assertInvert("2026/10/22", "2025/2/30");
	}

	public
	function test_68()
	{
		$this->assertDays("2014/7/12", "2019/4/28");
	}

	public
	function test_69()
	{
		$this->assertDays("2027/7/15", "2029/9/11");
	}

	public
	function test_70()
	{
		$this->assertInvert("2013/2/31", "2027/11/6");
	}

	public
	function test_71()
	{
		$this->assertDays("2025/4/17", "2029/5/7");
	}

	public
	function test_72()
	{
		$this->assertInvert("2027/1/5", "2026/5/29");
	}

	public
	function test_73()
	{
		$this->assertMonths("2015/11/6", "2024/1/9");
	}

	public
	function test_74()
	{
		$this->assertDays("2014/11/31", "2016/2/5");
	}

	public
	function test_75()
	{
		$this->assertMonths("2014/11/19", "2016/10/24");
	}

	public
	function test_76()
	{
		$this->assertDays("2025/4/8", "2013/9/24");
	}

	public
	function test_77()
	{
		$this->assertTotalDays("2019/6/3", "2018/10/30");
	}

	public
	function test_78()
	{
		$this->assertInvert("2030/6/1", "2018/3/31");
	}

	public
	function test_79()
	{
		$this->assertYears("2025/1/27", "2022/7/20");
	}

	public
	function test_80()
	{
		$this->assertMonths("2027/9/24", "2023/9/21");
	}

	public
	function test_81()
	{
		$this->assertTotalDays("2013/3/31", "2013/3/17");
	}

	public
	function test_82()
	{
		$this->assertInvert("2024/12/20", "2025/4/7");
	}

	public
	function test_83()
	{
		$this->assertDays("2022/9/7", "2023/7/22");
	}

	public
	function test_84()
	{
		$this->assertInvert("2024/9/7", "2014/2/27");
	}

	public
	function test_85()
	{
		$this->assertInvert("2017/6/8", "2025/5/20");
	}

	public
	function test_86()
	{
		$this->assertDays("2020/1/29", "2014/3/15");
	}

	public
	function test_87()
	{
		$this->assertInvert("2017/10/11", "2025/1/17");
	}

	public
	function test_88()
	{
		$this->assertInvert("2017/12/13", "2022/5/23");
	}

	public
	function test_89()
	{
		$this->assertDays("2029/2/19", "2016/12/24");
	}

	public
	function test_90()
	{
		$this->assertInvert("2026/10/26", "2030/5/5");
	}

	public
	function test_91()
	{
		$this->assertTotalDays("2013/9/21", "2028/9/29");
	}

	public
	function test_92()
	{
		$this->assertDays("2022/2/21", "2024/7/28");
	}

	public
	function test_93()
	{
		$this->assertTotalDays("2023/10/31", "2013/6/3");
	}

	public
	function test_94()
	{
		$this->assertMonths("2020/5/5", "2019/3/6");
	}

	public
	function test_95()
	{
		$this->assertInvert("2017/4/12", "2020/5/12");
	}

	public
	function test_96()
	{
		$this->assertYears("2020/11/14", "2024/6/11");
	}

	public
	function test_97()
	{
		$this->assertDays("2030/6/10", "2020/6/22");
	}

	public
	function test_98()
	{
		$this->assertDays("2024/3/9", "2029/5/24");
	}

	public
	function test_99()
	{
		$this->assertMonths("2025/6/18", "2017/8/12");
	}

	public
	function test_100()
	{
		$this->assertDays("2030/12/2", "2018/1/28");
	}

	public
	function test_101()
	{
		$this->assertDays("2030/8/8", "2021/1/10");
	}

	public
	function test_102()
	{
		$this->assertMonths("2016/7/24", "2025/3/7");
	}

	public
	function test_103()
	{
		$this->assertDays("2023/11/7", "2013/7/25");
	}

	public
	function test_104()
	{
		$this->assertInvert("2018/1/17", "2026/3/19");
	}

	public
	function test_105()
	{
		$this->assertDays("2019/8/1", "2015/9/1");
	}

	public
	function test_106()
	{
		$this->assertYears("2020/10/31", "2029/10/27");
	}

	public
	function test_107()
	{
		$this->assertInvert("2014/5/20", "2016/3/26");
	}

	public
	function test_108()
	{
		$this->assertMonths("2021/7/31", "2017/3/21");
	}

	public
	function test_109()
	{
		$this->assertTotalDays("2013/9/24", "2023/4/13");
	}

	public
	function test_110()
	{
		$this->assertYears("2019/3/28", "2017/12/25");
	}

	public
	function test_111()
	{
		$this->assertMonths("2029/8/21", "2027/1/6");
	}

	public
	function test_112()
	{
		$this->assertInvert("2030/7/17", "2017/5/9");
	}

	public
	function test_113()
	{
		$this->assertDays("2026/7/30", "2029/4/20");
	}

	public
	function test_114()
	{
		$this->assertYears("2020/11/22", "2018/3/26");
	}

	public
	function test_115()
	{
		$this->assertTotalDays("2023/12/23", "2016/4/9");
	}

	public
	function test_116()
	{
		$this->assertMonths("2025/8/12", "2014/10/28");
	}

	public
	function test_117()
	{
		$this->assertTotalDays("2023/12/11", "2027/8/16");
	}

	public
	function test_118()
	{
		$this->assertInvert("2023/5/3", "2014/11/6");
	}

	public
	function test_119()
	{
		$this->assertDays("2014/7/11", "2028/4/31");
	}

	public
	function test_120()
	{
		$this->assertDays("2015/7/9", "2019/6/12");
	}

	public
	function test_121()
	{
		$this->assertTotalDays("2023/8/25", "2020/4/5");
	}

	public
	function test_122()
	{
		$this->assertDays("2027/5/21", "2020/6/19");
	}

	public
	function test_123()
	{
		$this->assertInvert("2030/1/15", "2023/9/15");
	}

	public
	function test_124()
	{
		$this->assertMonths("2015/11/14", "2018/2/2");
	}

	public
	function test_125()
	{
		$this->assertYears("2021/6/22", "2030/12/4");
	}

	public
	function test_126()
	{
		$this->assertDays("2019/9/14", "2029/1/27");
	}

	public
	function test_127()
	{
		$this->assertInvert("2028/5/13", "2019/1/27");
	}

	public
	function test_128()
	{
		$this->assertYears("2015/11/30", "2018/7/11");
	}

	public
	function test_129()
	{
		$this->assertInvert("2014/1/31", "2013/6/3");
	}

	public
	function test_130()
	{
		$this->assertTotalDays("2023/8/8", "2015/3/27");
	}

	public
	function test_131()
	{
		$this->assertInvert("2019/9/24", "2024/11/28");
	}

	public
	function test_132()
	{
		$this->assertTotalDays("2014/3/7", "2017/8/30");
	}

	public
	function test_133()
	{
		$this->assertTotalDays("2020/5/28", "2019/10/19");
	}

	public
	function test_134()
	{
		$this->assertDays("2017/3/25", "2015/4/20");
	}

	public
	function test_135()
	{
		$this->assertInvert("2023/5/20", "2014/10/4");
	}

	public
	function test_136()
	{
		$this->assertInvert("2024/2/11", "2023/8/1");
	}

	public
	function test_137()
	{
		$this->assertMonths("2019/11/4", "2014/6/7");
	}

	public
	function test_138()
	{
		$this->assertTotalDays("2017/11/1", "2023/9/18");
	}

	public
	function test_139()
	{
		$this->assertMonths("2024/11/11", "2018/1/9");
	}

	public
	function test_140()
	{
		$this->assertYears("2021/7/15", "2024/4/14");
	}

	public
	function test_141()
	{
		$this->assertTotalDays("2019/9/22", "2023/5/5");
	}

	public
	function test_142()
	{
		$this->assertInvert("2023/8/26", "2029/4/9");
	}

	public
	function test_143()
	{
		$this->assertInvert("2023/3/2", "2022/1/16");
	}

	public
	function test_144()
	{
		$this->assertYears("2021/2/7", "2014/11/24");
	}

	public
	function test_145()
	{
		$this->assertTotalDays("2024/3/12", "2025/8/5");
	}

	public
	function test_146()
	{
		$this->assertDays("2016/12/29", "2023/11/26");
	}

	public
	function test_147()
	{
		$this->assertDays("2016/1/20", "2027/7/25");
	}

	public
	function test_148()
	{
		$this->assertMonths("2014/9/3", "2026/11/15");
	}

	public
	function test_149()
	{
		$this->assertYears("2017/8/27", "2019/7/9");
	}

	public
	function test_150()
	{
		$this->assertDays("2020/6/27", "2030/5/11");
	}

	public
	function test_151()
	{
		$this->assertInvert("2030/2/1", "2015/11/15");
	}

	public
	function test_152()
	{
		$this->assertDays("2030/11/18", "2017/6/23");
	}

	public
	function test_153()
	{
		$this->assertInvert("2014/1/31", "2014/4/8");
	}

	public
	function test_154()
	{
		$this->assertDays("2023/3/7", "2017/3/22");
	}

	public
	function test_155()
	{
		$this->assertInvert("2020/4/12", "2028/11/15");
	}

	public
	function test_156()
	{
		$this->assertMonths("2030/11/7", "2013/6/13");
	}

	public
	function test_157()
	{
		$this->assertYears("2016/5/1", "2028/12/4");
	}

	public
	function test_158()
	{
		$this->assertDays("2019/4/4", "2022/12/17");
	}

	public
	function test_159()
	{
		$this->assertDays("2014/8/23", "2016/1/13");
	}

	public
	function test_160()
	{
		$this->assertInvert("2017/10/28", "2029/6/29");
	}

	public
	function test_161()
	{
		$this->assertDays("2020/10/16", "2026/12/30");
	}

	public
	function test_162()
	{
		$this->assertMonths("2019/5/18", "2028/12/5");
	}

	public
	function test_163()
	{
		$this->assertTotalDays("2028/12/30", "2020/5/24");
	}

	public
	function test_164()
	{
		$this->assertMonths("2027/5/18", "2021/11/3");
	}

	public
	function test_165()
	{
		$this->assertInvert("2023/3/16", "2023/7/30");
	}

	public
	function test_166()
	{
		$this->assertMonths("2015/8/17", "2025/6/28");
	}

	public
	function test_167()
	{
		$this->assertMonths("2022/1/16", "2017/4/29");
	}

	public
	function test_168()
	{
		$this->assertDays("2022/11/23", "2020/5/13");
	}

	public
	function test_169()
	{
		$this->assertTotalDays("2022/4/3", "2028/6/5");
	}

	public
	function test_170()
	{
		$this->assertMonths("2024/6/9", "2024/8/14");
	}

	public
	function test_171()
	{
		$this->assertDays("2013/10/23", "2016/8/29");
	}

	public
	function test_172()
	{
		$this->assertDays("2020/8/30", "2023/4/8");
	}

	public
	function test_173()
	{
		$this->assertInvert("2024/7/22", "2016/10/23");
	}

	public
	function test_174()
	{
		$this->assertYears("2018/11/29", "2022/6/14");
	}

	public
	function test_175()
	{
		$this->assertInvert("2028/10/18", "2020/6/1");
	}

	public
	function test_176()
	{
		$this->assertTotalDays("2024/2/27", "2027/1/29");
	}

	public
	function test_177()
	{
		$this->assertMonths("2014/2/16", "2015/5/4");
	}

	public
	function test_178()
	{
		$this->assertTotalDays("2021/5/2", "2026/11/28");
	}

	public
	function test_179()
	{
		$this->assertTotalDays("2015/8/10", "2013/4/26");
	}

	public
	function test_180()
	{
		$this->assertDays("2030/2/6", "2025/6/15");
	}

	public
	function test_181()
	{
		$this->assertTotalDays("2018/11/4", "2019/7/21");
	}

	public
	function test_182()
	{
		$this->assertYears("2018/7/14", "2023/1/11");
	}

	public
	function test_183()
	{
		$this->assertYears("2023/4/13", "2020/11/17");
	}

	public
	function test_184()
	{
		$this->assertYears("2018/9/7", "2030/7/14");
	}

	public
	function test_185()
	{
		$this->assertDays("2014/8/15", "2020/6/19");
	}

	public
	function test_186()
	{
		$this->assertYears("2024/2/31", "2024/5/4");
	}

	public
	function test_187()
	{
		$this->assertYears("2029/9/26", "2022/10/31");
	}

	public
	function test_188()
	{
		$this->assertMonths("2021/4/27", "2015/4/14");
	}

	public
	function test_189()
	{
		$this->assertTotalDays("2015/2/23", "2014/1/4");
	}

	public
	function test_190()
	{
		$this->assertInvert("2015/5/8", "2017/12/18");
	}

	public
	function test_191()
	{
		$this->assertDays("2016/8/13", "2017/11/1");
	}

	public
	function test_192()
	{
		$this->assertInvert("2014/4/15", "2021/11/10");
	}

	public
	function test_193()
	{
		$this->assertYears("2019/4/17", "2030/7/16");
	}

	public
	function test_194()
	{
		$this->assertMonths("2019/4/31", "2023/12/27");
	}

	public
	function test_195()
	{
		$this->assertMonths("2030/1/5", "2029/3/27");
	}

	public
	function test_196()
	{
		$this->assertInvert("2026/5/11", "2022/3/28");
	}

	public
	function test_197()
	{
		$this->assertInvert("2030/12/25", "2015/1/26");
	}

	public
	function test_198()
	{
		$this->assertMonths("2016/4/3", "2023/7/4");
	}

	public
	function test_199()
	{
		$this->assertInvert("2024/5/5", "2029/2/27");
	}


	private function assertYears($s, $e)
	{
		$d = MyDate::diff($s, $e);
		$a = $this->dateDiff($s, $e);
		$this->assertSame($a->y, $d->years);
	}

	private function assertMonths($s, $e)
	{
		$d = MyDate::diff($s, $e);
		$a = $this->dateDiff($s, $e);
		$this->assertSame($a->m, $d->months);
	}

	private function assertDays($s, $e)
	{
		$d = MyDate::diff($s, $e);
		$a = $this->dateDiff($s, $e);
		$this->assertSame($a->d, $d->days);
	}

	private function assertTotalDays($s, $e)
	{
		$d = MyDate::diff($s, $e);
		$a = $this->dateDiff($s, $e);
		$this->assertSame($a->days, $d->total_days);
	}

	private function assertInvert($s, $e)
	{
		$d = MyDate::diff($s, $e);
		$a = $this->dateDiff($s, $e);
		$this->assertSame($a->invert, $d->invert);
	}

	private function dateDiff($start, $end)
	{
		$start = DateTime::createFromFormat('Y/m/d', $start);
		$end = DateTime::createFromFormat('Y/m/d', $end);
		return $start->diff($end);
	}
}
