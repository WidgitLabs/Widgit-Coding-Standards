<?php
/**
 * Unit test class for WordPressVIPMinimum Coding Standard.
 */

/**
 * Unit test class for the AdminBarRemoval sniff.
 */
class WordPressVIPMinimum_Tests_Classes_DeclarationCompatibilityUnitTest extends AbstractSniffUnitTest {

	/**
	 * Returns the lines where errors should occur.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList() {
		return array(
			4 => 1,
			7 => 1,
			10 => 1,
			13 => 1,
			16 => 1,
			19 => 1,
			25 => 1,
			40 => 1,
			43 => 1,
			46 => 1,
			49 => 1,
			52 => 1,
			61 => 1,
			67 => 1,
			70 => 1,
			76 => 1,
			79 => 1,
			79 => 1,
			88 => 1,
			106 => 1,
			112 => 1,
			119 => 1,
			128 => 1,
		);
	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * @return array <int line number> => <int number of warnings>
	 */
	public function getWarningList() {
		return array(
		);
	}

} // End class.