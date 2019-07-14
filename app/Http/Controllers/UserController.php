<?php

namespace App\Http\Controllers;

use App\User;
use App\UserInfo;
use Illuminate\Http\Request;
use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=UserInfo::all();

//        return view('user.index',compact('users'));
        return response()->json([
            'users' => $users,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=UserInfo::all();
//        return view('user.create' ,compact('users'));
        return response()->json([
            'users'    => $users,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//dd($request);
        $this->validate($request,[
            'firstName'=>'required',
            'secondName'=>'required',
            'thirdName'=>'required',
            'fourthName'=>'required',
            'email'=>'required|email',
            'idNum'=>'required',
            'functionalNum'=>'required',
            'specialization'=>'required',
            'socialStatus'=>'required',
            'gender'=>'required',
            'mobile' =>'required',
             'dateOfHiring'=>'required',
            'dateBirth'=>'required',
            'phone' =>['required','integer', 'min:0'],
            'address' => ['required', 'string'],
            'image'=>'image',
        ]);

        $user = new UserInfo();
        $user->firstName= $request->firstName;
        $user->secondName= $request->secondName;
        $user->thirdName= $request->thirdName;
        $user->fourthName= $request->fourthName;
        $user->email =$request->email;
        $user->idNum =$request->idNum;
        $user->functionalNum =$request->functionalNum;
        $user->specialization =$request->specialization;
        $user->mobile =$request->mobile;
        $user->phone =$request->phone;
        $user->address =$request->address;
        $user->dateOfHiring =$request->dateOfHiring;
        $user->dateBirth =$request->dateBirth;
        $user->socialStatus =$request->get('socialStatus');
      $user->gender =$request->gender;
//        $fileName = null;
        if($request->hasFile('featured_image')) {
            //add the new photo
            $image = $request->file('featured_image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $fileName);

            Image::make($image)->resize(100, 200)->save($location);
            $user->image =$fileName;
        }
        $user->save();
//        $user = User::create([
//            'firstName' =>request('firstName'),
//            'secondName' =>request('secondName'),
//            'thirdName' =>request('thirdName'),
//            'fourthName' =>request('fourthName'),
//            'email' =>request('email'),
//            'idNum' =>request('idNum'),
//            'functionalNum' =>request('functionalNum'),
//            'specialization' =>request('specialization'),
//            'mobile' =>request('mobile'),
//            'phone' =>request('phone'),
//            'address' =>request('address'),
//            'dateOfHiring' =>request('dateOfHiring'),
//            'dateBirth' =>request('dateBirth'),
//            'socialStatus' =>request('socialStatus'),
//            'gender' =>request('gender'),
//            'image' =>$fileName,
//        ]);

//        return redirect()->route('user.index')->with('successMsg','User successfully saved');
        return response()->json([
            'successMsg' => 'User successfully saved'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

//    public function  delete( Request $request){
//
//        $id =  $request->input('id');
//        $user = UserInfo::find($id);
//        $user->delete();
//       return "sucess";
//        $user->save();
//}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $user = UserInfo::find($id);
    $user->delete();

    return "sucess";
    $user->save();
}
}
