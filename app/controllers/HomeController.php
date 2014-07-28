<?php

class HomeController extends BaseController {

	public function getIndex()
	{
        $items = Auth::user()->items;

        return View::make('home', array(
            'items' => $items
            ));
    }

    public function postIndex(){
        $id = Input::get('id');

        $userId = Auth::user()->id;

        $item = Item::findOrFail($id);

        if($item->owner_id == $userId){
            $item->mark();
        }

        return Redirect::route('home');

    }

    public function getNew(){

        return View::make('new');

    }

    public function postNew(){

        $rules = array('name' => 'required|min:3|max:255');
        $validator = Validator::make(Input::all(), $rules);
        $userId = Auth::user()->id;
        
        if($validator->fails()){
            return Redirect::route('new')->withErrors($validator);
        }

        $item = new Item;
        $item->name = Input::get('name');
        $item->owner_id = $userId;
        

        $item->save();

        return Redirect::route('home');

    }

    public function getDelete(Item $task){

        if($task->owner_id == Auth::user()->id){
            $task->delete();
        }
        
        return Redirect::route('home');

    }

}
