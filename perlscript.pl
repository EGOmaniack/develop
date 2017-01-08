#!/usr/bin/perl

use strict;
use warnings;
 
my $filename = '112.txt';
open(my $fh, '>>', $filename) or die "Не могу открыть '$filename' $!";
print $fh "Мой первый отчет, сгенерированный с помощью perl\n".localtime()."\n";
close $fh;
print "готово\n";