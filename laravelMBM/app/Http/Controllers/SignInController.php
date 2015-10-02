<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\companyUser;
class SignInController extends Controller
{
    public function index(){
    	return view('signin.signin');   	
    }

    public function siginForm($id){
    
    	$entity = $id;
    	if($entity == 'student' || $entity == 'company')
    		return view('signin.siginForm',compact('entity'));
    	else
    		return redirect('/signIn');

    }

    // envoked on get request to ask for whether to register as Student or Company
    public function registerIndex(){
    	return view('signin.register');
    }	
	// Envoked on get request to show Form to fill for registeration
    public function registerUserForm($id){
    	$entity = $id;
    	if($entity == 'student' || $entity == 'company')
    		return view('signin.registerUser',compact('entity'));
    	else
    		return redirect('/register');

    }

    // Envoked on post request to make actual/Database registeration
    public function register( $id, Requests\companyUserRequest $request){
    	 $entity = $request['entity'];
         $request['password'] = bcrypt($request['password']);
        if($entity == 'company')
        {
            $companyUser = companyUser::create($request->all());
            return redirect('postSignIn/' . $id );
        }
        elseif($entity == 'student')
        {
            $studentUser = studentUser::create($request->all());
            return redirect('/postSignIn/' . $id);
            //return view('auth.postSignIn')->with('entity',$entity);
        }
        else{
            return redirect('/home'); // Trying to mess with our database.
        }
    }

     // public function save(Requests\ArticleRequest $request){
     // // $request =$request->all();
     // // $request['user_id'] = \Auth::id(); 
     // \Auth::user()->articles()->save(new Article($request->all()));
     // $article = Article::create($request->all());
     // return redirect('articles');
     //}
 }