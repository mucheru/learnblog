<html>
<head>
<title>
laravel vue tutorial
</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
    body {
                font-family: 'Nunito', sans-serif;
            }
    input[type=text]{
        background:black;
        color:white;
        margin-left:100px;
    }
    .textarea1{
        width:1200px;
        height:150px;
        background:black;
        color:white;
        margin-left:100px;
    }
    .textarea2{
        width:1200px;
        height:750px;
        background:black;
        color:white;
        margin-left:100px;

    }
    .textarea3{
        width:1200px;
        height:350px;
        background:black;
        color:white;
        margin-left:100px;

    }
    .textarea5{
        width:1200px;
        height:1200px;
        background:black;
        color:white;
        margin-left:100px;

    }
    .textarea6{
        width:1200px;
        height:300px;
        background:black;
        color:white;
        margin-left:100px;

    }
    .textarea7{
        width:1200px;
        height:400px;
        background:black;
        color:white;
        margin-left:100px;

    }
    .textarea8{
        width:1200px;
        height:350px;
        background:black;
        color:white;
        margin-left:100px;

    }
    .textarea9{
        width:1200px;
        height:450px;
        background:black;
        color:white;
        margin-left:100px;

    }
    .textarea10{
        width:1200px;
        height:1150px;
        background:black;
        color:white;
        margin-left:100px;
    }
    .textarea11{
        width:1200px;
        height:900px;
        background:black;
        color:white;
        margin-left:100px;

    }
    .textarea12{
        width:1200px;
        height:900px;
        background:black;
        color:white;
        margin-left:100px;

    }
    .textarea13{
        width:1200px;
        height:500px;
        background:black;
        color:white;
        margin-left:100px;

    }
    .textarea14{
        width:1200px;
        height:900px;
        background:black;
        color:white;
        margin-left:100px;

    }

    </style>
</head>
</html>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<?php $__currentLoopData = $introduction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $introduction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card text-center">
    <div class="card-header">   
    <?php echo e($introduction->topic); ?>

    </div>
    <div class="card-body">
    <?php echo e($introduction->description); ?><br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><br>
    <p>
    we will be using laravel 8.Open terminal and run the below command to install laravel.
    I will assume you have already install composer in your machine.For more information about 
    <a href="https://getcomposer.org/doc/00-intro.md">composer</a> have a look at the link</p>
    <div>
    <button id="copy0">Copy</button>
    <input class="form-control" id="input0" type="text" value="composer create-project laravel/laravel laravel-vue-crud"/>
    </div><br>
    After downloading the application.The next step will be to configure our database.For my case
    I will be using mysql.Ensure you have install mysql in your machine.In our .env file(laravel-vue-crud/.env) here are lines 
    that you need to update as per your configuration<br>

    <div>
    <code>
    <textarea class="textarea1"id="textarea">
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=db
        DB_USERNAME=root
        DB_PASSWORD=
    </textarea>
    </code>
    </div>
    <strong><h1>Setting up Model and Migration</h1></strong><br>
    <p>This means we will be creating a model and a database migration file.The model will act like
    orm to our database.The migration file will be used to create the table in our database.Run the below process to respectively create the Model (database table) and migration file</p>
    <br>

    <div>
    <button id="copy1">Copy</button>
    <input class="form-control" id="input1" type="text" value="php artisan make:model Animal -m"/>
    </div>

    <p>Update the migration file as shown below.add the name and the details field.(laravel-vue-crud/database/migrations/xxxx_create_animals_table.php)</p>
    <div>
    <button id="copy2">Copy</button>

    <code>
    <textarea class="textarea2"id="textarea2">

    &lt?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('detail'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}

    </textarea>
    </code>
    </div>
    <p>After update on the migration file lets also define our values at the model.Open the 
    Animal model and update as shown.(app/Models/Animal.php)</p>
    <div>
    <code>
    <textarea class="textarea3" id="textarea3">
    &lt?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'detail'
    ];    
}
    </textarea>
    </code>
    </div>
    <p>Next, you need to evoke migration with below command:</p>
    <div>
    <button id="copy3">Copy</button>
    <input class="form-control" id="input2" type="text" value="php artisan migrate"/>
    </div>
    <strong><h1>Creating the controller</h1></strong>
    The controller hundles the instruction given from the web.Our controller will have the crud operations.
    In laravel it is called resource.To create it use the below command.
    <br>
    <div>
    <button id="copy4">Copy</button>
    <input class="form-control" id="input4" type="text" value="php artisan make:controller AnimalController -r"/>
    </div>
    <strong><h1>Updating  the controller</h1></strong>
    <p>Lets update the controller as shown below</p>    
    <div>
    <button id="copy5">Copy</button>

    <code>
    <textarea class="textarea5" id=textarea5>
    &lt?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
       public function index()
    {
        //
        $animals = Animal::all()->toArray();
        return array_reverse($animals);     
    }
   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
        $animal = new Animal([
            'name' => $request->input('name'),
            'detail' => $request->input('detail')
        ]);
        $animal->save();

        return response()->json('Animal created! successfully');
    }

   
    public function show($id)
    {
        //
        $animal = Animal::find($id);
        return response()->json($animal);
    }

       public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
        $animal = Animal::find($id);
        $animal->update($request->all());

        return response()->json('Animal updated!');
    }

    
    public function destroy($id)
    {
        //
        $animal = Animal::find($id);
        $animal->delete();

        return response()->json('Animal deleted!');
    }
}

    </textarea>
    </code>
    </div>
    <h1>Create the Routes</h1>
    In laravel there are two files that work with routes that is the routes/web.php and routes/api.php files.
    Since our application will be based on api  we will update the api file with the resource api endpoints.
    lets start with the web.php.<br>
    Update the web.php with the 'any' method.The any method registers a route that responds to all 
    HTTP verbs.<br>
    <div>
    Open routes/web.php file, in here; you have to define the following route:<br>
    <button id="copy6">Copy</button>
    <code>
    <textarea class="textarea6" id=textarea6>
    &lt?php

    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    */
    
    Route::get('{any}', function () {
        return view('app');
    })->where('any', '.*');
    </textarea>
    </code>
    </div> 
    <p>Next, you need to open the routes/api.php file. First, import the Animal controller on top, then define the CRUD API routes in the route group method as ilustrated below:</p>
    <div>
    <button id="copy7">Copy</button>

    <code>
    <textarea class="textarea7" id=textarea7>
    &lt?php

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AnimalController;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    */

    Route::middleware('api')->group(function () {
        Route::resource('animals', AnimalController::class);
    });
    </textarea>
    </code>
    </div>
    <p>We are done with our backend so lets focus on our frontend which will be vue js</p>
    <strong><h1>Install Laravel Vue UI</h1></strong>
    In your project directory ie root folder,run composer command to install Vue UI in laravel, it will create the vue laravel scaffold:
    <div>
    <button id="copy8">Copy</button>
    <input class="form-control" id="input8" type="text" value="composer require laravel/ui"/>
    </div>
    <div>
    <button id="copy9">Copy</button>
    <input class="form-control" id="input9" type="text" value="php artisan ui vue"/>
    </div>
    <div>
    <button id="copy10">Copy</button>
    <input class="form-control" id="input10" type="text" value="npm install"/>
    </div>

    <div>
    <button id="copy11">Copy</button>
    <input class="form-control" id="input11" type="text" value="npm install vue-router vue-axios"/>
    </div>
    <div>
    <button id="copy12">Copy</button>
    <input class="form-control" id="input12" type="text" value="npm run watch"/>
    </div>
    <h1>Initiate Vue in Laravel</h1>
    To set up a vue application in Laravel, you have to create a layout folder in the 
    resources/views directory and create an app.blade.php file within the layout folder.
    paste below code in resources/views/layout/app.blade.php file:
    <div>
    <button id="copy13">Copy</button>

    <code>
    <textarea class="textarea8" id="textarea8">
            <!doctype html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" value="{{ csrf_token() }}" />

            <title>Vue JS CRUD Operations in Laravel</title>

            <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        </head>

        <body><video src=""></video>
            <div id="app"></div>
            <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
        </body>
        </html>
    </textarea>
    </code>
    </div>
    <h1>Creating Vue CRUD Components</h1>
    Next, you have to add the router-view directive in App.vue file; this template will help invoke all the vue routes associated with the components.
    So, create App.vue file in resources/js folder, put the below code in resources/js/App.vue file:
   <div>
   <button id="copy14">Copy</button>

   <code>
   <textarea class="textarea9" id="textarea9">
   <template>
<div class="container"> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <router-link to="/" class="nav-item nav-link">Animal List</router-link>
                <router-link to="/create" class="nav-item nav-link">Create Animal</router-link>
            </div>
        </div>
    </nav>

    <router-view> </router-view>
</div>
</template>

<script>
export default {}
</script>
    
   </textarea>
   </code>
   </div>
<p> Next, you need to create the following vue js component files inside the resources/js/components folder:

AllAnimal.vue
createAnimal.vue
editAnimal.vue
Add code in resources/js/components/AllAnimal.vue file; in here we are getting all data from database and deleting single product object from database through vue component.

</p>
<div class="" title="allAnimals">
<button id="copy15">Copy</button>

<code>
<textarea class="textarea10" id="textarea10">
<template>
    <div>
        <h2 class="text-center">Animals List</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Detail</th>
                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="animal in animals" :key="animal.id">
                <td>{{ animal.id }}</td>
                <td>{{ animal.name }}</td>
                <td>{{ animal.detail }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: animal.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteAnimal(animal.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                animals: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/animals/')
                .then(response => {
                    this.animals = response.data;
                });
        },
        methods: {
            deleteAnimal(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/animals/${id}`)
                    .then(response => {
                        let i = this.animals.map(data => data.id).indexOf(id);
                        this.animals.splice(i, 1)
                    });
            }
        }
    }
</script>
</textarea>
</code>
</div>
<p>Place code in resources/js/components/createAnimal.vue file:</p>
<div>
<button id="copy16">Copy</button>

<code>
<textarea class="textarea11" id="textarea11">
<template>
    <div>
        <h3 class="text-center">Create Product</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addProduct">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="animal.name">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" v-model="animal.detail">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                animal: {}
            }
        },
        methods: {
            addAnimal() {
                this.axios
                    .post('http://localhost:8000/api/animals', this.animal)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>
</textarea>
</code>
</div>
<p>
Next move to resources/js/components/editAnimal.vue template and add the below code:
</p>
<div>
<button id="copy17">Copy</button>

<code>
<textarea class="textarea12" id="textarea12">
<template>
    <div>
        <h3 class="text-center">Edit Product</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateAnimal">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="animal.name">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" v-model="animal.detail">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                animal: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/animals/${this.$route.params.id}`)
                .then((res) => {
                    this.animal = res.data;
                });
        },
        methods: {
            updateAnimal() {
                this.axios
                    .patch(`http://localhost:8000/api/animals/${this.$route.params.id}`, this.animal)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>

</textarea>
</code>
</div>
<h1>Create Vue CRUD Routes</h1>
<p>In this step, you have to create vue routes, create routes.js inside resources/js directory, add the code in the resources/js/routes.js file:</p>
<div>
<button id="copy18">Copy</button>

<code>
<textarea class="textarea13" id="textarea13">
import AllAnimal from './components/AllAnimal.vue';
import CreateAnimal from './components/createAnimal.vue';
import EditAnimal from './components/editAnimal.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllAnimal
    },
    {
        name: 'create',
        path: '/create',
        component: CreateAnimal
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditAnimal
    }
];
</textarea>
</code>
</div>
<h1>Define App.vue in app.js</h1>
<p>This final step brings you to the point where you must include the required packages in the app.js file. please add the following code in the resources/js/app.js file:</p> 
<div>
<button id="copy19">Copy</button>
<code>
<textarea class="textarea14" id="textarea14">
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('AllAnimal-component', require('./components/AllAnimal.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import axios from 'axios';
import { routes } from './routes';
import App from './App.vue';


Vue.use(VueRouter);
Vue.use(VueAxios, axios);
 
const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
});


</textarea>
</code>
</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      










    <script>
    function copy0(){
            var copyText=document.querySelector("#input0");
            copyText.select();
            document.execCommand("copy")
        }
        function copy1(){
            var copyText=document.querySelector("#input1");
            copyText.select();
            document.execCommand("copy")
        }

        function copy2(){
            var copyText=document.querySelector("#textarea2");
            copyText.select();
            document.execCommand("copy")
        }
        function copy3(){
            var copyText=document.querySelector("#input2");
            copyText.select();
            document.execCommand("copy")
        }
        function copy4(){
            var copyText=document.querySelector("#input4");
            copyText.select();
            document.execCommand("copy")
        }
        function copy5(){
            var copyText=document.querySelector("#textarea5");
            copyText.select();
            document.execCommand("copy")
        }
        function copy6(){
            var copyText=document.querySelector("#textarea6");
            copyText.select();
            document.execCommand("copy")
        }
        function copy7(){
            var copyText=document.querySelector("#textarea7");
            copyText.select();
            document.execCommand("copy")
        }
        function copy8(){
            var copyText=document.querySelector("#input8");
            copyText.select();
            document.execCommand("copy")
        }
        function copy9(){
            var copyText=document.querySelector("#input9");
            copyText.select();
            document.execCommand("copy")
        }
        function copy10(){
            var copyText=document.querySelector("#input10");
            copyText.select();
            document.execCommand("copy")
        }
        function copy11(){
            var copyText=document.querySelector("#input11");
            copyText.select();
            document.execCommand("copy")
        }

        function copy12(){
            var copyText=document.querySelector("#input12");
            copyText.select();
            document.execCommand("copy")
        }
        function copy13(){
            var copyText=document.querySelector("#textarea8");
            copyText.select();
            document.execCommand("copy")
        }
        function copy14(){
            var copyText=document.querySelector("#textarea9");
            copyText.select();
            document.execCommand("copy")
        }
        function copy15(){
            var copyText=document.querySelector("#textarea10");
            copyText.select();
            document.execCommand("copy")
        }
        function copy16(){
            var copyText=document.querySelector("#textarea11");
            copyText.select();
            document.execCommand("copy")
        }
        function copy17(){
            var copyText=document.querySelector("#textarea12");
            copyText.select();
            document.execCommand("copy")
        }
        function copy18(){
            var copyText=document.querySelector("#textarea13");
            copyText.select();
            document.execCommand("copy")
        }
        function copy19(){
            var copyText=document.querySelector("#textarea14");
            copyText.select();
            document.execCommand("copy")
        }
        document.querySelector("#copy0").addEventListener("click", copy0);
        document.querySelector("#copy2").addEventListener("click", copy2);
        document.querySelector("#copy3").addEventListener("click", copy3);
        document.querySelector("#copy5").addEventListener("click", copy5);
        document.querySelector("#copy6").addEventListener("click", copy6);
        document.querySelector("#copy7").addEventListener("click", copy7);
        document.querySelector("#copy8").addEventListener("click", copy8);
        document.querySelector("#copy9").addEventListener("click", copy9);
        document.querySelector("#copy10").addEventListener("click", copy10);
        document.querySelector("#copy11").addEventListener("click", copy11);
        document.querySelector("#copy12").addEventListener("click", copy12);
        document.querySelector("#copy13").addEventListener("click", copy13);
        document.querySelector("#copy14").addEventListener("click", copy14);
        document.querySelector("#copy15").addEventListener("click", copy15);
        document.querySelector("#copy16").addEventListener("click", copy16);
        document.querySelector("#copy17").addEventListener("click", copy17);
        document.querySelector("#copy18").addEventListener("click", copy18);
        document.querySelector("#copy19").addEventListener("click", copy19);



















    </script>

</body>
</html><?php /**PATH /home/steve/learn/resources/views//laravel/laravelvue.blade.php ENDPATH**/ ?>