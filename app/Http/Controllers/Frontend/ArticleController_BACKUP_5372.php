<?php namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
//use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend;
//use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Lang;
use App\Models\Order;
use App\Models\Text;
use App;
use Illuminate\Support\Facades\Response;
//use Illuminate\Contracts\View\View;
use Mail;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($lang, $type = 'main')
	{
		/*$product = null;
		$cooperation = null;
		$news = null;
		$about_us = null;
		$contact = null;
		$slides = null;
		switch($type){
			case 'main':
				$slides = Category::where('link','slider')
					->first()
					->articles()
					->where('active', 1)
					->get()
					->sortByDesc("priority");
<<<<<<< HEAD
				$categories = Category::where('parent_id',0)
					->where('active', 1)
					->get();
				$category = Category::where("link","=",$type)->first();
				$category_parent = $category->category_parent()->first();
				$category_children = $category->category_children()->get();
				dd()
=======

>>>>>>> Make_frontend
				break;
			case 'company':
				break;
			case 'news':
				break;
			case 'work':
				break;
			case 'gallery':
				break;
			case 'slider':
				break;
		}
*/
		/*$meta = view()->share('meta', Article::where('name', '=', 'meta.'.$type)->first());*/


<<<<<<< HEAD
		return view('frontend.' . $type)
			->with(compact('slides', 'categories','category', 'category_parent', 'category_children'));
=======
		return view('frontend.'. $type);
			/*->with(compact('slides'));*/
	}
	public function products($lang, $type)
	{

		$product_category = Category::where('link', $type)
		->first();
		$products = $product_category
		->articles()
		->where('active', '1')
		->orderBy("priority", 'desc')
		->paginate(5);
		return view('frontend.product')
			->with(compact('products', 'product_category'));
>>>>>>> Make_frontend
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show( $id)
	{
	//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public function contact(Request $request)
	{
		if ($request ->isMethod('post')){
			/*get [] from request*/
			$all = $request->all();

			/*make rules for validation*/
			$rules = [
				'name' => 'required|max:50',
				'phone' => 'required|max:15',
			];

			/*validation [] according to rules*/
			$validator = Validator::make($all, $rules);

			/*send error message after validation*/
			if ($validator->fails()) {
				return response()->json(array(
					'success' => false,
					'message' => $validator->messages()->first()
				));
			}

			/*create new item in DB*/
			Order::create($all);

			//Send item on admin email address
			Mail::send('emails.contact', $all, function($message){
				$email = $this->getEmail();
				$message->to($email, 'Example')->subject('Повідомлення про зворотній зв\'язок з сайту "Візи в Польщу" ');
			});
			return response()->json([
				'success' => 'true'
			]);
		}
	}
	public function callback(Request $request)
	{
		if ($request->isMethod('post')) {
			/*get [] from request*/
			$all = $request->all();

			/*make rules for validation*/
			$rules = [
				'name' => 'required|max:50',
				'email' => 'required|email',
				'text' => 'required|max:350',
			];

			/*validation [] according to rules*/
			$validator = Validator::make($all, $rules);

			/*send error message after validation*/
			if ($validator->fails()) {
				return response()->json(array(
					'success' => false,
					'message' => $validator->messages()->first()
				));
			}
			//Send item on admin email address
			Mail::send('emails.callback', $all, function ($message) {
				$email = $this->getEmail();
				$message->to($email, 'Example')->subject('Повідомлення про зворотній зв\'язок з сайту "Візи в Польщу" ');
			});
			return response()->json([
				'success' => 'true'
			]);
		}
	}
	/*get  var email from DB TEXT for send email*/
	private function getEmail(){
		$email = Text::where("name","=","config.email")->first();
		$email = $email['description'];
		return $email;
	}
}
