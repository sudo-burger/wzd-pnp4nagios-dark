<?php
#
#
$_WARNRULE = '#FFFF00';
$_CRITRULE = '#FF0000';
$fontcolor = '#323232';
$backcolor = '#000000';
 
#if (strlen ($LABEL[1]) >= strlen ($LABEL[2])){
#    $lenlabel = strlen ($LABEL[1]) + 2;
#} else {
#    $lenlabel = strlen ($LABEL[2]) + 2;
#}
$lenlabel = max(
    strlen($LABEL[1]),
    strlen($LABEL[2]),
    strlen($LABEL[3]),
    strlen($LABEL[4]),
    strlen($LABEL[5]),
    strlen($LABEL[6])) + 2;

$label1 = sprintf("%' -".$lenlabel."s", $LABEL[1]);
$label2 = sprintf("%' -".$lenlabel."s", $LABEL[2]);
$label3 = sprintf("%' -".$lenlabel."s", $LABEL[3]);
$label4 = sprintf("%' -".$lenlabel."s", $LABEL[4]);
$label5 = sprintf("%' -".$lenlabel."s", $LABEL[5]);
$label6 = sprintf("%' -".$lenlabel."s", $LABEL[6]);
 
$ds_name[1] = "$LABEL[1] / $LABEL[2] " ;
$opt[1] = "--vertical-label $UNIT[1] --title \"Traffic\" ";
$opt[1] .= '--color=CANVAS'.$backcolor.' ';
$opt[1] .= '--color=BACK'.$backcolor.' ';
$opt[1] .= '--color=FONT'.$fontcolor.' ';
#$opt[1] .= '--color=SHADEA#ffffff ';
#$opt[1] .= '--color=SHADEB#ffffff ';
#$opt[1] .= '--color=CANVAS#ffffff ';
#$opt[1] .= '--color=GRID#00991A ';
#$opt[1] .= '--color=MGRID#00991A ';
#$opt[1] .= '--color=ARROW#00FF00 ';
$opt[1] .= '--slope-mode ';
$def[1] =  "DEF:inb=$RRDFILE[1]:$DS[1]:MAX " ;
$def[1] .= "DEF:outb=$RRDFILE[2]:$DS[2]:MAX " ;
$def[1] .= "CDEF:outbi=outb,-1,* " ;
$def[1] .= rrd::gradient('inb','f0f0f0','0000a0',$label1,20);
$def[1] .= "GPRINT:inb:LAST:\"%3.3lf $UNIT[1] LAST \" ";
$def[1] .= "GPRINT:inb:MAX:\"%3.3lf $UNIT[1] MAX \" ";
$def[1] .= "GPRINT:inb" . ':AVERAGE:"%3.3lf ' . $UNIT[1] . ' AVERAGE \j" ';
$def[1] .= rrd::gradient('outbi','ffff42','ee7318',$label2,20);
$def[1] .= "GPRINT:outb:LAST:\"%3.3lf $UNIT[2] LAST \" ";
$def[1] .= "GPRINT:outb:MAX:\"%3.3lf $UNIT[2] MAX \" ";
$def[1] .= "GPRINT:outb" . ':AVERAGE:"%3.3lf ' . $UNIT[2] . ' AVERAGE \j" ';
$def[1] .= "COMMENT:\"  \\l\" " ;
$def[1] .= "LINE1:0#ffffff " ;

$ds_name[2] = "$LABEL[3] / $LABEL[5] " ;
$opt[2] = "--vertical-label $UNIT[3] --title \"Errors\" ";
$opt[2] .= '--color=CANVAS'.$backcolor.' ';
$opt[2] .= '--color=BACK'.$backcolor.' ';
$opt[2] .= '--color=FONT'.$fontcolor.' ';
#$opt[2] .= '--color=SHADEA#ffffff ';
#$opt[2] .= '--color=SHADEB#ffffff ';
#$opt[2] .= '--color=CANVAS#ffffff ';
#$opt[2] .= '--color=GRID#00991A ';
#$opt[2] .= '--color=MGRID#00991A ';
#$opt[2] .= '--color=ARROW#00FF00 ';
$opt[2] .= '--slope-mode ';
$def[2] =  "DEF:inb=$RRDFILE[3]:$DS[3]:MAX " ;
$def[2] .= "DEF:outb=$RRDFILE[5]:$DS[5]:MAX " ;
$def[2] .= "CDEF:outbi=outb,-1,* " ;
$def[2] .= rrd::gradient('inb','f0f0f0','0000a0',$label3,20);
$def[2] .= "GPRINT:inb:LAST:\"%3.3lf $UNIT[3] LAST \" ";
$def[2] .= "GPRINT:inb:MAX:\"%3.3lf $UNIT[3] MAX \" ";
$def[2] .= "GPRINT:inb" . ':AVERAGE:"%3.3lf ' . $UNIT[3] . ' AVERAGE \j" ';
$def[2] .= rrd::gradient('outbi','ffff42','ee7318',$label5,20);
$def[2] .= "GPRINT:outb:LAST:\"%3.3lf $UNIT[5] LAST \" ";
$def[2] .= "GPRINT:outb:MAX:\"%3.3lf $UNIT[5] MAX \" ";
$def[2] .= "GPRINT:outb" . ':AVERAGE:"%3.3lf ' . $UNIT[5] . ' AVERAGE \j" ';
$def[2] .= "COMMENT:\"  \\l\" " ;
$def[2] .= "LINE1:0#ffffff " ;

$ds_name[3] = "$LABEL[4] / $LABEL[6] " ;
$opt[3] = "--vertical-label $UNIT[4] --title \"Discarded\" ";
$opt[3] .= '--color=CANVAS'.$backcolor.' ';
$opt[3] .= '--color=BACK'.$backcolor.' ';
$opt[3] .= '--color=FONT'.$fontcolor.' ';
#$opt[3] .= '--color=SHADEA#ffffff ';
#$opt[3] .= '--color=SHADEB#ffffff ';
#$opt[3] .= '--color=CANVAS#ffffff ';
#$opt[3] .= '--color=GRID#00991A ';
#$opt[3] .= '--color=MGRID#00991A ';
#$opt[3] .= '--color=ARROW#00FF00 ';
$opt[3] .= '--slope-mode ';
$def[3] =  "DEF:inb=$RRDFILE[4]:$DS[4]:MAX " ;
$def[3] .= "DEF:outb=$RRDFILE[6]:$DS[6]:MAX " ;
$def[3] .= "CDEF:outbi=outb,-1,* " ;
$def[3] .= rrd::gradient('inb','f0f0f0','0000a0',$label4,20);
$def[3] .= "GPRINT:inb:LAST:\"%3.3lf $UNIT[4] LAST \" ";
$def[3] .= "GPRINT:inb:MAX:\"%3.3lf $UNIT[4] MAX \" ";
$def[3] .= "GPRINT:inb" . ':AVERAGE:"%3.3lf ' . $UNIT[4] . ' AVERAGE \j" ';
$def[3] .= rrd::gradient('outbi','ffff42','ee7318',$label6,20);
$def[3] .= "GPRINT:outb:LAST:\"%3.3lf $UNIT[6] LAST \" ";
$def[3] .= "GPRINT:outb:MAX:\"%3.3lf $UNIT[6] MAX \" ";
$def[3] .= "GPRINT:outb" . ':AVERAGE:"%3.3lf ' . $UNIT[6] . ' AVERAGE \j" ';
$def[3] .= "COMMENT:\"  \\l\" " ;
$def[3] .= "LINE1:0#ffffff " ;
#    $def[1] .= "HRULE:" . $WARN[1] . $_WARNRULE . ':"Inbound Warning on  ' . $WARN[1] . ' ' . $UNIT[1] . '" ' ;
#    $def[1] .= "HRULE:" . $WARN[2] * -1 . $_WARNRULE . ':"Outbound Warning on  ' . $WARN[2] . ' ' . $UNIT[2] . '\j" ';
#    $def[1] .= "HRULE:" . $CRIT[1] . $_CRITRULE . ':"Inbound Critical on ' . $CRIT[1] . ' ' . $UNIT[1] . '" ';
#    $def[1] .= "HRULE:" . $CRIT[2] * -1 . $_CRITRULE . ':"Outbound Critical on ' . $CRIT[2] . ' ' . $UNIT[2] . '\j" ';
?>
