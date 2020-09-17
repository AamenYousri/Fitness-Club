<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){

        if($request->search == 'bulking'){
            return redirect('/programs/bulking');
        }
        
        elseif($request->search == 'shredding'||$request->search == 'shreding'||$request->search == 'Shredding'){
            return redirect('/programs/shredding');

        }
        elseif($request->search == 'calisthenics'||$request->search == 'calisthenic'||$request->search == 'Calisthenics'){
            return redirect('/programs/calisthenics');

        }
        elseif($request->search == 'getfit'||$request->search == 'get fit'){
            return redirect('/programs/getfit');

        }
        elseif($request->search == 'powerlifting'||$request->search == 'strength'||$request->search == 'strenght'||$request->search == 'Strength'||$request->search == 'Powerlifting'){
            return redirect('/programs/powerlifting');

        }
        elseif($request->search == 'women'||$request->search == 'woman'||$request->search == 'Woman'||$request->search == 'Women'){
            return redirect('/programs/women');

        }
        elseif($request->search == 'abs'||$request->search == 'ABS'||$request->search == 'Abs'){
            return redirect('/programs/abs');

        }
        elseif($request->search == 'programs'||$request->search == 'program'||$request->search == 'Programs'){
            return redirect('/programs');

        }
        elseif($request->search == 'contactus' ||$request->search ==  'message' ||$request->search ==  'feedback' ||$request->search == 'contact us'){
            return redirect('/contactus');

        }
        elseif($request->search == 'articles' || $request->search=='Articles'){
            return redirect('/articles');

        }
        elseif($request->search == 'motivation'||$request->search == 'Motivation'){
            return redirect('/motivation');

        }
        elseif($request->search == 'nutrition'||$request->search == 'Nutrition'){
            return redirect('/nutrition');

        }
        else{
            return redirect('/')->with('status', $request->search . ' is not found!');

        }

        // else{
        //     return redirect('/')->with('status', $request->search . ' is not found!');
        // }

    }
}
