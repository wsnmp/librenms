<?php

$rrd_filename = $config['rrd_dir'] . "/" . $device['hostname'] . "/". safename("cbgp-" . $data['bgpPeerIdentifier'] . ".ipv6.unicast.rrd");

include("includes/graphs/bgp/prefixes.inc.php");

?>
