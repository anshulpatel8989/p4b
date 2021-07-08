<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use DB;
    use Auth;
    use Log;
    use Redirect;
    use App\News;

    class NewsController extends Controller {

        public function show() {
            $news = DB::table('news')
                            ->select('*')
                            ->where('is_active', '1')
                            ->where('is_deleted', '0')
                            ->orderBy('published_on', 'DESC')->get();

            return view('news.list', compact('news'));
        }

        public function add() {

            return view('news.add');
        }

        protected function create(Request $request) {


            try {
                $validator = $request->validate([
                    'language_id' => 'required|numeric',
                    'heading' => 'required|string|max:255',
                    'details' => 'required|string',

                ]);
                $image_name = "defaultnews.png";
                $image = null;
                if ($request->has('image')) {
                    $image = $request->file('image');
                    var_dump($image);
                    $image_name = "nw" . time() .  rand(1000, 9999); 

                    $guessExtension = $image->getClientMimeType();
                    if($guessExtension ="image/jpeg")
                    {
                        $guessExtension="JPEG";
                    }
                    $image_name = $image_name . '.' . $guessExtension;
 
                    $image->move(storage_path('app/public/images/news/') , $image_name);
                }

                try {
                    
                    $newsData = array(
                        'ref_id' => $request->input('ref_id'),
                        'language_id' => $request->input('language_id'),
                        'heading' => $request->input('heading'),
                        'details' => $request->input('details'),
                        'is_published' => ($request->input('is_published')?1:0),
                        'published_on' => $request->input('published_on'),
                        'image' => $image_name,
                        'is_active' => 1,
                        'is_deleted' => 0,
                        'created_by' => Auth::id(),
                        'updated_by' => Auth::id(),
                    );

                    $news_id = DB::table('news')->insertGetId($newsData);
                } catch (\Illuminate\Database\QueryException $ex) {
                    Log::error("Add User DB error" . $ex->getMessage());
                    return Redirect::back()->withInput()->with('error', 'unable to add news');
                }

                if ($news_id) {
                    return redirect('news_list')->with('success', 'New news added successfully');
                } else {

                    return Redirect::back()->withInput()->with('error', 'unable to add news');
                }
            } catch (Exception $e) {
                Log::error("Add User try error : " . json_encode($e));
                return Redirect::back()->withInput()->with('error', 'unable to add news');
            }
        }
 public function edit($id) {
           
            $news = DB::table('news')
                            ->select('*')
                            ->where('is_active', '1')
                            ->where('is_deleted', '0')
                            ->where('id',$id)
                            ->orderBy('published_on', 'DESC')->get();

            return view('news.edit', compact('news'));
        }
        protected function update(Request $request) {
          
            
                        try {
                            $validator = $request->validate([
                                'language_id' => 'required|numeric',
                                'heading' => 'required|string|max:255',
                                'details' => 'required|string',
                            ]);
                            $image_name =$request->input('eimage');
                            $image = null;
                            if ($request->has('image')) {
                                $image = $request->file('image');
                                var_dump($image);
                                $image_name = "nw" . time() .  rand(1000, 9999); 
                                $guessExtension = $image->getClientMimeType();
                                if($guessExtension ="image/jpeg")
                                {
                                    $guessExtension="JPEG";
                                }
                                $image_name = $image_name . '.' . $guessExtension;
             
                                $image->move(storage_path('app/public/images/news/') , $image_name);
                            }
          
                            try {
                               
                                $id=$request->input('id');
                                $newsData = array(
                                    'ref_id' => $request->input('ref_id'),
                                    'language_id' => $request->input('language_id'),
                                    'heading' => $request->input('heading'),
                                    'details' => $request->input('details'),
                                    'is_published' => ($request->input('is_published')?1:0),
                                    'published_on' => date("Y-m-d", strtotime($request->input('published_on'))),
                                    'image' => $image_name,
                                    'is_active' => 1,
                                    'is_deleted' => 0,
                                    'updated_by' => Auth::id(),
                                );
           
                                DB::table('news')->where('id', $id)->update($newsData);
      
      
                            } catch (\Illuminate\Database\QueryException $ex) {
                                Log::error("Add User DB error" . $ex->getMessage());
                                return Redirect::back()->withInput()->with('error', 'unable to update news');
                            }
            
                            if ($id) {
                                return redirect('news_list')->with('success', 'New news Updated successfully');
                            } else {
            
                                return Redirect::back()->withInput()->with('error', 'unable to update news');
                            }
                        } catch (Exception $e) {
                            Log::error("Add User try error : " . json_encode($e));
                            return Redirect::back()->withInput()->with('error', 'unable to update news');
                        }
                    }


                    public function delete($id){
                        $news =News::where('id',$id)
                                        ->delete();
                                        if($news){
                                            return redirect('/news_list');
                                        }else{
                                            return redirect('/news_list');
                                        }
                    }   
    }
    