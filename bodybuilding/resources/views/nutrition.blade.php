@extends('master')

@section('content')
    
<img class="img-responsive d-lg-none d-flex justify-content-end paddingLeft" src="{{asset('img/fitness-club-logo-vector-20684856%20copy.PNG')}}" alt="slogan" style="width: 80%">

<div class="container">
    <br>
            <br>
    <h1 class="display-2 d-none d-lg-block">Nutrition</h1>
    <br>
    <h1 class="display-4">Calories calculator</h1>

</div>






<div class="container">
    <div class="calc-outer-wrap">
        <div id="form-error" style="display:none;"></div>
        <form class="calc-form" id="calc-form">
            <div class="form-fields">

                <div class="field-outer">
                    <label for="distance" class="top-label">Age:</label>
                    <div class="field-items">
                        <div class="field field-large form-group">
                            <input type="text" class="form-control" name="age" id="age" inputmode="numeric" pattern="[0-9]*">
                        </div><!--  /.field-large -->

                        <div class="field field-medium form-group">
                            <select name="gender" class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>

                            </select>

                        </div><!--  /.field-small -->
                    </div><!--  /.field-items -->
                </div><!--  /.field-outer -->

                <div class="field-outer">
                    <label for="height" class="top-label">Height:</label>
                    <div class="field-items">
                        <div class="field form-group field-large">
                            <input type="text" name="height_cm" id="height-cm" class="form-control" inputmode="numeric" pattern="[0-9]*">
                            <label for="height-cm">Centimeters</label>
                        </div><!--  /.field -->
                    </div><!--  /.field-items -->
                </div><!--  /.field-outer -->




                <div class="form-group">
                    <label for="sel1" class="font-weight-bold">Your goal:</label>
                    <select class="form-control" id="sel1">
                        <option>Lose weight</option>
                        <option>Maintain weight</option>
                        <option>Gain weight</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="sel2" class="font-weight-bold">Your exercise rate:</label>
                    <select class="form-control" id="sel2">
                        <option>Slightly active</option>
                        <option>Moderately active</option>
                        <option>Highly active</option>
                    </select>
                </div>
                
                
                
                <div class="field-outer">
                    <label for="weight" class="top-label">Your weight:</label>
                    <div class="field-items">
                        <div class="field field-large form-group">
                            <input type="text" name="weight" class="form-control" id="weight" inputmode="numeric" pattern="[0-9]*">
                        </div><!--  /.field-large -->
                        <div class="field field-small form-group">
                            <select name="weight_unit" class="form-control">
                                <option value="kg">kg</option>
                                <option value="lb">lb</option>
                            </select>
                        </div><!--  /.field-small -->
                    </div><!--  /.field-items -->
                </div><!--  /.field-outer -->
                <div class="btn-wrap field-outer ">
                    <button class="form-submit btn-primary btn pb-4 mb-4">Calculate</button>
                </div>
            </div><!--  /.form fields -->


        </form>
        <div id="results" style="display:none;"></div>
    </div><!--  /.calc-outer-wrap -->


    <hr />
</div>


<div class="d-flex justify-content-center container">
    <img class="img-responsive " src="{{asset('img/AIRVAULT-FITNESS.png')}}" alt="contact us" style="width: 65%;">
</div>

<br>
<br>
@endsection