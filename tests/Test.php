<?php

class BasicTestsFunction extends \PHPUnit\Framework\TestCase {
  public function testAlgorithmBasic() {
    $this->assertEquals(get_angle('15:15'), 7.5);
    $this->assertEquals(get_angle('7:19'),  105.5);
    $this->assertEquals(get_angle('00:00'), 0);
    $this->assertEquals(get_angle('34:12'), "Invalid input");
    $this->assertEquals(get_angle('error'), "Invalid input");
    $this->assertEquals(get_angle('er:or'), "Invalid input");
  }
}