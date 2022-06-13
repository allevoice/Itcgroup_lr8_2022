<?php

namespace App\Http\Controllers;

use App\Headerpage;
use Illuminate\Foundation\Console\EventMakeCommand;
use Illuminate\Http\Request;

class HeaderpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Headerpage::orderBy('page', 'ASC')->get();
        return view('admin/headerpage/liste', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Headerpage  $headerpage
     * @return \Illuminate\Http\Response
     */
    public function edit(Headerpage $headerpage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Headerpage  $headerpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Headerpage $headerpage)
    {
        //
    }

    //Insertion de nouvelle donne si ce trouve les tables non pas de donnees
    public function newdata(){
        $user = '1';

        $data =Headerpage::insert([
            [
                'title' => 'WE OFFER DIFFERENT SERVICES',
                'description' => 'We have the service you need, with international quality.',
                'page' => '1',
                'status' => '0',
                'langues' => '1',
                'level' => 'b',
                'iduser' => $user,
            ],
            [
                'title' => 'ABOUT US',
                'description' => 'We are 100% dedicated to customer satisfaction and relationship built on trust',
                'page' => '2',
                'status' => '0',
                'langues' => '1',
                'level' => 'a',
                'iduser' => $user,
            ],
            [
                'title' => 'MEET OUR ADVISORS',
                'description' => 'Our team is made up of people passionate about technology and business management. Indeed, a wide range of skills and expertise is needed to provide the best solution to our clients in all areas of Information Technology and consulting.',
                'page' => '2',
                'status' => '0',
                'langues' => '1',
                'level' => 'b',
                'iduser' => $user,
            ],
            [
                'title' => 'SERVICES',
                'description' => 'We offer quality service, tailored to your needs. Join us.',
                'page' => '3',
                'status' => '0',
                'langues' => '1',
                'level' => 'a',
                'iduser' => $user,
            ],
            [
                'title' => 'WE OFFER DIFFERENT SERVICES',
                'description' => 'We have a wide range of quality services at the best price',
                'page' => '3',
                'status' => '0',
                'langues' => '1',
                'level' => 'b',
                'iduser' => $user,
            ],
            [
                'title' => 'PROJECTS',
                'description' => 'They are all satisfied with our achievements. Take a look.',
                'page' => '4',
                'status' => '0',
                'langues' => '1',
                'level' => 'a',
                'iduser' => $user,
            ],
            [
                'title' => 'OUR LATEST WORK',
                'description' => 'Find our latest achievements, in all areas such as: security, data management, installation etc. Our customers are all over the country.',
                'page' => '4',
                'status' => '0',
                'langues' => '1',
                'level' => 'b',
                'iduser' => $user,
            ],
            [
                'title' => 'BLOG',
                'description' => 'Meet',
                'page' => '5',
                'status' => '0',
                'langues' => '1',
                'level' => 'a',
                'iduser' => $user,
            ],
            [
                'title' => 'CONTACT US',
                'description' => 'Contact us for any questions or suggestions',
                'page' => '6',
                'status' => '0',
                'langues' => '1',
                'level' => 'a',
                'iduser' => $user,
            ],
            [
                'title' => 'GET IN TOUCH WITH US',
                'description' => 'Join our support team, available six (6) days',
                'page' => '6',
                'status' => '0',
                'langues' => '1',
                'level' => 'b',
                'iduser' => $user,
            ],
            [
                'title' => 'LEAVE A COMMENT',
                'description' => 'Leave comments or questions about the services that interest you.',
                'page' => '6',
                'status' => '0',
                'langues' => '1',
                'level' => 'c',
                'iduser' => $user,
            ],
            [
                'title' => 'Our Business Partners',
                'description' => 'That interest you.',
                'page' => '7',
                'status' => '0',
                'langues' => '1',
                'level' => 'a',
                'iduser' => $user,
            ]
        ]);

       if($data == true){
           return redirect()->route('listheaderpage');
       }else{
           return 'erreur';
       }

    }

}
