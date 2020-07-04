<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Contact;
use DB;
  
class ChartController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function state()
    {
        $ayeyar=DB::table('contacts')->where('state','Ayeyarwady Region')->count();
        $bago=DB::table('contacts')->where('state','Bago Region')->count();

        $chin=DB::table('contacts')->where('state','Chin State')->count();
        $kachin=DB::table('contacts')->where('state','Kachin State')->count();

        $kayah=DB::table('contacts')->where('state','Kayah State')->count();
        $kayin=DB::table('contacts')->where('state','Kayin State')->count();

        $magway=DB::table('contacts')->where('state','Magway Region')->count();
        $mandalay=DB::table('contacts')->where('state','Mandalay Region')->count();

        $mom=DB::table('contacts')->where('state','Mon State')->count();
        $rakhine=DB::table('contacts')->where('state','Rakhine State')->count();

        $sagaing=DB::table('contacts')->where('state','Sagaing Region')->count();
        $shan=DB::table('contacts')->where('state','Shan State')->count();

        $tanin=DB::table('contacts')->where('state','Tanintharyi Region')->count();
        $yangon=DB::table('contacts')->where('state','Yangon Region')->count();


return view('charts.state',['ayeyar'=>$ayeyar,'bago'=>$bago,'chin'=>$chin,'kachin'=>$kachin,'kayah'=>$kayah,'magway'=>$magway,
'mandalay'=>$mandalay,'mom'=>$mom,'rakhine'=>$rakhine,'sagaing'=>$sagaing,'shan'=>$shan,'tanin'=>$tanin,'yangon'=>$yangon,'kayin'=>$kayin]);  

}

public function university()
{
    $tu=DB::table('contacts')->where('university','Technological University')->count();
    $cu=DB::table('contacts')->where('university','Computer university')->count();
    $ot=DB::table('contacts')->where('university','other')->count();



return view('charts.university',['tu'=>$tu,'cu'=>$cu,'ot'=>$ot]);  

}

public function staff()
{
    $student=DB::table('contacts')->where('staff','Student')->count();
    $staff=DB::table('contacts')->where('staff','Goverment Staff')->count();
    $ot=DB::table('contacts')->where('staff','other')->count();


return view('charts.staff',['student'=>$student,'staff'=>$staff,'ot'=>$ot]);  

}


public function jobp()
{
    $pjmanager=DB::table('contacts')->where('jobposition','Project Manager')->count();
    $dbmanager=DB::table('contacts')->where('jobposition','Database Manager')->count();

    $executive=DB::table('contacts')->where('jobposition','IT Executive')->count();
    $itdirector=DB::table('contacts')->where('jobposition','IT Director')->count();

    $itamanager=DB::table('contacts')->where('jobposition','IT Assitant Manager')->count();
    $itdhead=DB::table('contacts')->where('jobposition','IT Department Head')->count();

    $itaassociate=DB::table('contacts')->where('jobposition','IT Administrative Associate')->count();
    $nwmanager=DB::table('contacts')->where('jobposition','Network System Manager')->count();

    $itmanager=DB::table('contacts')->where('jobposition','IT Manager')->count();
    $emanager=DB::table('contacts')->where('jobposition','EDP Manager')->count();

    $smanager=DB::table('contacts')->where('jobposition','System Manager')->count();
    $tmanager=DB::table('contacts')->where('jobposition','Training Manager')->count();

    $pjleader=DB::table('contacts')->where('jobposition','Project Leader')->count();
    $tleader=DB::table('contacts')->where('jobposition','Team Leader')->count();

    $sexecutive=DB::table('contacts')->where('jobposition','Senior Executive')->count();
    $itsacmanager=DB::table('contacts')->where('jobposition','IT Security and Compliance Manager')->count();

    $dbadministrator=DB::table('contacts')->where('jobposition','Database  Administrator')->count();
    $vpresident=DB::table('contacts')->where('jobposition','Vice President(IT)')->count();

    $vp=DB::table('contacts')->where('jobposition','Vice President(Information Service)')->count();
    $cio=DB::table('contacts')->where('jobposition','Chief Information Officer(CIO)')->count();

    $cto=DB::table('contacts')->where('jobposition','Chief Technicial Officer(CTO)')->count();
    $cso=DB::table('contacts')->where('jobposition','Chief Security Officer(CSO')->count();

    $td=DB::table('contacts')->where('jobposition','Technical Director')->count();
    $tsd=DB::table('contacts')->where('jobposition','IT/IS Director')->count();

    $ipjd=DB::table('contacts')->where('jobposition','IT Project Director')->count();
    $iosd=DB::table('contacts')->where('jobposition','IOS Developer')->count();

    $phpp=DB::table('contacts')->where('jobposition','PHP Programmer')->count();
    $sp=DB::table('contacts')->where('jobposition','Senior Programmer')->count();

    $software=DB::table('contacts')->where('jobposition','Software Developer')->count();
    $ad=DB::table('contacts')->where('jobposition','Android Developer')->count();

    $adeveloper=DB::table('contacts')->where('jobposition','Application Developer')->count();
    $isse=DB::table('contacts')->where('jobposition','IT Software Support Enginner')->count();


    $jp=DB::table('contacts')->where('jobposition','Junior Programmer')->count();
    $iae=DB::table('contacts')->where('jobposition','IT Application Engineer')->count();


    $mad=DB::table('contacts')->where('jobposition','Mobile Application  Developer')->count();
    $programmer=DB::table('contacts')->where('jobposition','Programmer')->count();

    
    $ap=DB::table('contacts')->where('jobposition','Analyst Programmer')->count();
    $wd=DB::table('contacts')->where('jobposition','Web Developer')->count();

    $networking=DB::table('contacts')->where('jobposition','Networking')->count();
    $iie=DB::table('contacts')->where('jobposition','IT Infrasturcture Engieer')->count();


    $nasuo=DB::table('contacts')->where('jobposition','Network Administration & Security Unit Officer')->count();
    $nt=DB::table('contacts')->where('jobposition','Network Technician')->count();


    $isam=DB::table('contacts')->where('jobposition','IT Sales and Marketing')->count();








return view('charts.jobp',['pjmanager'=>$pjmanager,'dbmanager'=>$dbmanager,'executive'=>$executive,'itdirector'=>$itdirector,'itamanager'=>$itamanager,'itdhead'=>$itdhead,'itaassociate'=>$itaassociate,'nwmanager'=>$nwmanager,'itmanager'=>$itmanager,'emanager'=>$emanager,
'smanager'=>$smanager,'tmanager'=>$tmanager,'pjleader'=>$pjleader,'tleader'=>$tleader,'sexecutive'=>$sexecutive,'itsacmanager'=>$itsacmanager,'dbadministrator'=>$dbadministrator,'vpresident'=>$vpresident,'vp'=>$vp,'cio'=>$cio,'cto'=>$cto,'cso'=>$cso,
'td'=>$td,'tsd'=>$tsd,'ipjd'=>$ipjd,'iosd'=>$iosd,'phpp'=>$phpp,'sp'=>$sp,'software'=>$software,'ad'=>$ad,'adeveloper'=>$adeveloper,'isse'=>$isse,
'jp'=>$jp,'iae'=>$iae,'mad'=>$mad,'programmer'=>$programmer,'ap'=>$ap,'wd'=>$wd,'networking'=>$networking,'iie'=>$iie,'nasuo'=>$nasuo,'nt'=>$nt,'isam'=>$isam,]);  

}

public function course()
{
    $java=DB::table('contacts')->where('course','java')->count();
    $php=DB::table('contacts')->where('course','php')->count();

    $microsoft=DB::table('contacts')->where('course','Microsoft')->count();
    $window=DB::table('contacts')->where('course','Window')->count();

    $linux=DB::table('contacts')->where('course','Linux')->count();
  

return view('charts.course',['java'=>$java,'php'=>$php,'microsoft'=>$microsoft,'window'=>$window,'linux'=>$linux,]);  

}

public function jobl()
{
    $ayeyar=DB::table('contacts')->where('state','Ayeyarwady Region')->count();
    $bago=DB::table('contacts')->where('state','Bago Region')->count();

    $chin=DB::table('contacts')->where('state','Chin State')->count();
    $kachin=DB::table('contacts')->where('state','Kachin State')->count();

    $kayah=DB::table('contacts')->where('state','Kayah State')->count();
    $kayin=DB::table('contacts')->where('state','Kayin State')->count();

    $magway=DB::table('contacts')->where('state','Magway Region')->count();
    $mandalay=DB::table('contacts')->where('state','Mandalay Region')->count();

    $mom=DB::table('contacts')->where('state','Mon State')->count();
    $rakhine=DB::table('contacts')->where('state','Rakhine State')->count();

    $sagaing=DB::table('contacts')->where('state','Sagaing Region')->count();
    $shan=DB::table('contacts')->where('state','Shan State')->count();

    $tanin=DB::table('contacts')->where('state','Tanintharyi Region')->count();
    $yangon=DB::table('contacts')->where('state','Yangon Region')->count();


return view('charts.jobl',['ayeyar'=>$ayeyar,'bago'=>$bago,'chin'=>$chin,'kachin'=>$kachin,'kayah'=>$kayah,'magway'=>$magway,
'mandalay'=>$mandalay,'mom'=>$mom,'rakhine'=>$rakhine,'sagaing'=>$sagaing,'shan'=>$shan,'tanin'=>$tanin,'yangon'=>$yangon,'kayin'=>$kayin,]);  
}


public function slary()
{
    $one=DB::table('contacts')->where('slary','100000-200000')->count();
    $two=DB::table('contacts')->where('slary','200000-300000')->count();
    $three=DB::table('contacts')->where('slary','300000-400000')->count();
    $four=DB::table('contacts')->where('slary','400000-500000')->count();
    $five=DB::table('contacts')->where('slary','500000-600000')->count();
    $six=DB::table('contacts')->where('slary','600000-700000')->count();
    $seven=DB::table('contacts')->where('slary','700000-800000')->count();
    $eight=DB::table('contacts')->where('slary','800000-900000')->count();
    $nine=DB::table('contacts')->where('slary','900000-1000000')->count();
    $ten=DB::table('contacts')->where('slary','1000000 above')->count();






 return view('charts.slary',['one'=>$one,'two'=>$two,'three'=>$three,'four'=>$four,'five'=>$five,'six'=>$six,
 'seven'=>$seven,'eight'=>$eight,'nine'=>$nine,'ten'=>$ten]);  

}

}


