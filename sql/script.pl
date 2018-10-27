#!/usr/bin/perl


$file = "text.txt";
open(FILE, ">$file");


my $baseHash;
#Insert movies here as necessary
$baseHash->{'Movie1'}->{''};
$baseHash->{'Movie2'}->{''};

#Insert new timings here as necessary
my @timingArray;
$timingArray[0] = '0930';
$timingArray[1] = '1130';
$timingArray[2] = '1430';
$timingArray[3] = '1730';
$timingArray[4] = '2030';

#Insert days here as necessary
@months = qw( Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec );
@days = qw(Sun Mon Tue Wed Thu Fri Sat Sun);
($sec,$min,$hour,$mday,$mon,$year,$wday,$yday,$isdst) = localtime();
my @datesArray;
$year = $year+1900;
$datesArray[0] = "$mday"."-"."$months[$mon]"."-"."$year";
$mday = $mday+1;
$datesArray[1] = "$mday"."-"."$months[$mon]"."-"."$year";
$mday = $mday+1;
$datesArray[2] = "$mday"."-"."$months[$mon]"."-"."$year";

$x = 1;

foreach my $movies (sort keys %$baseHash){
  for (my $i=0; $i<=2; $i++) {
    for (my $j=0; $j<=4; $j++) {
      for (my $k=0; $k<=23; $k++){
        #print FILE "$movies day:$datesArray[$i] timing:$timingArray[$j] seat:$k\n";
        print FILE "INSERT INTO availability(id, title, dayofweek, timing, seatcode, bookingstatus) VALUES ($x, $movies, $datesArray[$i], $timingArray[$j], $k, 0)\n";
      }
   }
  }
}
