<?php
class SampleTest extends WP_UnitTestCase {
    function testSample() {
        $this->assertTrue( is_plugin_active('sensei-plugin/sensei-plugin.php') );
    }
}
