<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class traineesController extends Controller
{
    public $trainees =
    array(
        "1" => array(
            "id"                => "1",
            "name"              => "Superman",
            "birthday"          => "14 June",
            "image"             => "https://media-exp1.licdn.com/dms/image/C5603AQH8LNvBrB8WVA/profile-displayphoto-shrink_800_800/0/1579708721002?e=1613606400&v=beta&t=jT_ZrLpzZMYsrNCuic4pPPVbPY-38Pqutf_tB0HO9Hk",
            "github account"    => "https://github.com/oca-class-b",
            "linkedin"          => "https://www.linkedin.com/feed/",
            "projects"          => array(
                                            "0" => array(
                                                "project_name"   => "HTML and CSS",
                                                "is_compleated"  => "compleated",
                                            ),
                                            "1" => array(
                                                "project_name"   => "Wordpress",
                                                "is_compleated"  => "compleated",
                                            ),
                                        ),
            "attendance"        => array(
                                            "0" => array(
                                                "check_in"       => 9 ,
                                                "check_ out"     => 16 ,
                                            ),
                                            "1" => array(
                                                "check_in"       => 8 ,
                                                "check_ out"     => 14 ,
                                            ),
                                        ),
        ),
        "2" => array(
            "id"                => "2",
            "name"              => "Kawthar",
            "birthday"          => "14 June",
            "image"             => "img/kawthar.jpg",
            "github account"    => "https://github.com/oca-class-b",
            "linkedin"          => "https://www.linkedin.com/feed/",
            "projects"          => array(
                                            "0" => array(
                                                "project_name"  => "HTML and CSS",
                                                "is_compleated" => "Did not complete",
                                            ),
                                            "1" => array(
                                                "project_name"  => "Wordpress",
                                                "is_compleated" => "Did not complete",
                                            ),
                                        ),
            "attendance"       => array(
                                            "0" => array(
                                                "check_in"      => 7,
                                                "check_ out"    => 16,
                                            ),
                                            "1" => array(
                                                "check_in"      => 8,
                                                "check_ out"    => 16,
                                            ),
                                        ),
        ),
        "3" => array(
            "id"                => "3",
            "name"              => "AlEnooz",
            "birthday"          => "14 June",
            "image"             => "https://media-exp1.licdn.com/dms/image/C5635AQHdbNYRUSnifg/profile-framedphoto-shrink_800_800/0/1605106404172?e=1608213600&v=beta&t=XCMeD-wpkI-1EbCWYLoiVFYFr0d2P4sO-0VV2B1PYpE",
            "github account"    => "https://github.com/oca-class-b",
            "linkedin"          => "https://www.linkedin.com/feed/",
            "projects"          => array(
                                            "0" => array(
                                                "project_name"  => "HTML and CSS",
                                                "is_compleated" => "compleated",
                                            ),
                                            "1" => array(
                                                "project_name"  => "Wordpress",
                                                "is_compleated" => "Did not complete",
                                            ),
                                        ),
            "attendance"        => array(
                                            "0" => array(
                                                "check_in"      => 8,
                                                "check_ out"    => 16,
                                            ),
                                            "1" => array(
                                                "check_in"      => 8,
                                                "check_ out"    => 10,
                                            ),
                                        ),
                                    ),
        "4" => array(
            "id"                => "4",
            "name"              => "sara",
            "birthday"          => "14 June",
            "image"             => "https://media-exp1.licdn.com/dms/image/C4D35AQEn0ZElPmvaHA/profile-framedphoto-shrink_400_400/0/1607698296993?e=1608213600&v=beta&t=S0O7LsPCGJYZcNUAj9-8dm5bsEcm85540XDIjufNQxk",
            "github account"    => "https://github.com/oca-class-b",
            "linkedin"          => "https://www.linkedin.com/feed/",
            "projects"          => array(
                                            "0" => array(
                                                "project_name"  => "HTML and CSS",
                                                "is_compleated" => "compleated",
                                            ),
                                            "1" => array(
                                                "project_name"  => "Wordpress",
                                                "is_compleated" => "Did not complete",
                                            ),
                                        ),
            "attendance"        => array(
                                            "0" => array(
                                                "check_in"   => 9,
                                                "check_ out" => 18,
                                            ),
                                            "1" => array(
                                                "check_in"   => 8,
                                                "check_ out" => 13,
                                            ),
                                        ),
        ),
        "5" => array(
            "id"                => "5",
            "name"              => "Mrmr",
            "birthday"          => "14 June",
            "image"             => "https://media-exp1.licdn.com/dms/image/C5635AQG7FM4w2Z7v5A/profile-framedphoto-shrink_400_400/0/1601124090031?e=1608213600&v=beta&t=RiAoY157Ej2o4R9687WyrhJ3IaeHX3p1oo_r7rpdTk4",
            "github account"    => "https://github.com/oca-class-b",
            "linkedin"          => "https://www.linkedin.com/feed/",
            "projects"          => array(
                                            "0" => array(
                                                "project_name"  => "HTML and CSS",
                                                "is_compleated" => "compleated",
                                            ),
                                            "1" => array(
                                                "project_name"  => "Wordpress",
                                                "is_compleated" => "compleated",
                                            ),
                                        ),
            "attendance"        => array(
                                            "0" => array(
                                                "check_in"   => 9,
                                                "check_ out" => 16,
                                            ),
                                            "1" => array(
                                                "check_in"   => 8,
                                                "check_ out" => 14,
                                            ),
                                        ),
        ),
        "6" => array(
            "id"                => "6",
            "name"              => "Firas",
            "birthday"          => "14 June",
            "image"             => "https://media-exp1.licdn.com/dms/image/C4E03AQEaMkdaZ4SlbA/profile-displayphoto-shrink_400_400/0/1600934552730?e=1613606400&v=beta&t=lLGp3nM9Cj8ll0_10qYu3aP9J6ULr7oKd-YM33lPAp8",
            "github account"    => "https://github.com/oca-class-b",
            "linkedin"          => "https://www.linkedin.com/feed/",
            "projects"          => array(
                                            "0" => array(
                                                "project_name"  => "HTML and CSS",
                                                "is_compleated" => "compleated",
                                            ),
                                            "1" => array(
                                                "project_name"  => "Wordpress",
                                                "is_compleated" => "compleated",
                                            ),
                                        ),
            "attendance"        => array(
                                            "0" => array(
                                                "check_in"   => 9,
                                                "check_ out" => 16,
                                            ),
                                            "1" => array(
                                                "check_in"   => 8,
                                                "check_ out" => 14,
                                            ),
                                        ),
        ),
        "7" => array(
            "id"                => "7",
            "name"              => "Roa'a",
            "birthday"          => "14 June",
            "image"             => "https://media-exp1.licdn.com/dms/image/C4D03AQHl_SDapqPmIQ/profile-displayphoto-shrink_400_400/0/1606520032060?e=1613606400&v=beta&t=aRZkCo2VcQpuAO8p6RzQBvajrjdnwGEYwBk1ENS98K4",
            "linkedin"          => "https://www.linkedin.com/feed/",
            "projects"          => array(
                                            "0" => array(
                                                "project_name"  => "HTML and CSS",
                                                "is_compleated" => "compleated",
                                            ),
                                            "1" => array(
                                                "project_name"  => "Wordpress",
                                                "is_compleated" => "compleated",
                                            ),
                                        ),
            "attendance"        => array(
                                            "0" => array(
                                                "check_in" => 9,
                                                "check_ out" => 17,
                                            ),
                                            "1" => array(
                                                "check_in" => 7,
                                                "check_ out" => 15,
                                            ),
                                        ),
        ),
        "8" => array(
            "id"                => "8",
            "name"              => "Lana",
            "birthday"          => "14 June",
            "image"             => "https://media-exp1.licdn.com/dms/image/C5603AQFiy2IvKh99Hw/profile-displayphoto-shrink_400_400/0/1601186847723?e=1613606400&v=beta&t=0zj-2bjHWq61AyLVY63Iab58r6f9vJZ1JJtRrgDqMoo",
            "github account"    => "https://github.com/oca-class-b",
            "linkedin"          => "https://www.linkedin.com/feed/",
            "projects"          => array(
                                            "0" => array(
                                                "project_name"  => "HTML and CSS",
                                                "is_compleated" => "compleated",
                                            ),
                                            "1" => array(
                                                "project_name"  => "Wordpress",
                                                "is_compleated" => "Did not complete",
                                            ),
                                        ),
            "attendance"        => array(
                                                "0" => array(
                                                    "check_in"   => 9,
                                                    "check_ out" => 16,
                                                ),
                                                "1" => array(
                                                    "check_in"   => 8,
                                                    "check_ out" => 17,
                                                ),
                                            ),
                                        ),
        "9" => array(
            "id"                => "9",
            "name"              => "Ayham",
            "birthday"          => "14 June",
            "image"             => "https://media-exp1.licdn.com/dms/image/C4D03AQGybSu2sDMm2w/profile-displayphoto-shrink_400_400/0/1602865151400?e=1613606400&v=beta&t=68iGG4wphY-kI3gwMrNakTVdsx3MedLcBFHGJ5nYHSA",
            "github account"    => "https://github.com/oca-class-b",
            "linkedin"          => "https://www.linkedin.com/feed/",
            "projects"          => array(
                                            "0" => array(
                                                "project_name"  => "HTML and CSS",
                                                "is_compleated" => "compleated",
                                            ),
                                            "1" => array(
                                                "project_name"  => "Wordpress",
                                                "is_compleated" => "compleated",
                                            ),
                                        ),
            "attendance"        => array(
                                            "0" => array(
                                                "check_in"   => 9,
                                                "check_ out" => 16,
                                            ),
                                            "1" => array(
                                                "check_in"   => 8,
                                                "check_ out" => 15,
                                            ),
                                        ),
        ),
        "10" => array(
            "id"                => "10",
            "name"              => "Hamzeh",
            "birthday"          => "14 June",
            "image"             => "https://media-exp1.licdn.com/dms/image/C4D03AQHdbVjKN24aOA/profile-displayphoto-shrink_400_400/0/1600866731777?e=1613606400&v=beta&t=Ficb7OiXSUXHzHpx4GPaIjeNvYWIeyMmKFK6QVyqWMY",
            "github account"    => "https://github.com/oca-class-b",
            "linkedin"          => "https://www.linkedin.com/feed/",
            "projects"          => array(
                                            "0" => array(
                                                "project_name"  => "HTML and CSS",
                                                "is_compleated" => "compleated",
                                            ),
                                            "1" => array(
                                                "project_name"  => "Wordpress",
                                                "is_compleated" => "compleated",
                                            ),
                                        ),
            "attendance"        => array(
                                            "0" => array(
                                                "check_in"   => 9,
                                                "check_ out" => 17,
                                            ),
                                            "1" => array(
                                                "check_in"   => 8,
                                                "check_ out" => 14,
                                            ),
                                        ),
        ),

    );

    public function dashboardPage()
    {
       $trainees = $this->trainees ;
            return view('admin.dashboard', compact('trainees'));

    }



    public function traineesPage()
    {
        $trainees = $this->trainees ;
        return view('admin.trainees', compact('trainees'));
    }



// shatnawi way
//     public function singleTraineePage(Request $request){
// $arrayIndex = $request["id"] ;
// // echo $id ;
// $trainees = $this->trainees ;
// $single = array() ;
// $single = $trainees[$arrayIndex];
// return view('admin.singleTrainee', compact('single'));
//     }

    public function singleTraineePage($id){
$trainees = $this->trainees ;
return view('admin.singleTrainee', compact('trainees' , 'id'));
    }




    public function attendanceReportPage()
    {
        $trainees = $this->trainees ;
return view('admin.attendanceReport', compact('trainees'));
    }


    public function projectsSummeryPage()
    {
        $trainees = $this->trainees ;
return view('admin.projectsSummery', compact('trainees'));
    }

    public function galleryPage()
    {
        return view('admin.gallery');
    }

}
