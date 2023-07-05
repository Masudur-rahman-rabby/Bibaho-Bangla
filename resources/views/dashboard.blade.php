<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    .bg{
        background-color: #f1f1f1;
    }
    .br5{

        border-radius: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.8);
    }

    .image{
        width: 20%;
        height: 20%;
        margin-right: 150px;
        margin-left: 30px;
        margin-top: 30px;
    }
    .content{
        margin-left: 15%;
        width: 50%;
        height: auto;
        
    }
    .name{
        margin-top: 10px;
        font-size: 24px;
        font-style: italic;
        color: rgb(80, 14, 14)

    }

    .text-image{
        height: 15px; 
        width: 15px;
        margin-right: 25px;
    }

    .text{
        margin-bottom: 10px; 
        display: flex; 
        align-items:center;
    }
    .floating-button {
        height: 55px;
        width: 55px;
            position: fixed;
            bottom: 30px; /* Adjust the bottom distance as per your preference */
            right: 40px; /* Adjust the right distance as per your preference */
            background-color: #2c1e7e; /* Set the background color of the button */
            color: #fff; /* Set the text color */
            padding: 15px 20px; /* Adjust the padding as per your button size */
            border-radius: 50%; /* Make the button round */
            text-decoration: none; /* Remove underline */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.8); /* Add a shadow effect */
            z-index: 9999; /* Ensure the button appears above other elements */
            transition: 0.6s ease;
        }
        .floating-button:hover {       
  opacity: 0.8; /* Reduce opacity on hover */
}
.gp{
  
    margin-top: 30px;
    margin-left: 10%;
    width: 80%;
}

.btn{
    background-color: #2c1e7e;
    color: #fff;
    transition: 0.2s ease-in;
}
.btn:hover{
    opacity: 0.8;
}

</style>

<body class="bg">

    <x-app-layout>
        
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
     

        <div class="row m-2">

            <form action="" class="gp">
                <div class="form-group">
                  <input type="search" name="search" id="search" class="form-control" placeholder="Search People by name or gender or age" value="{{$search}}">
                </div>
                <button class="btn">Search</button>
                <a href="{{ route('dashboard') }}" class="btn">
                    Reset
                </a>
            </form>

        </div>
        <div class="row m-10 p-2 ">

            @foreach($biodata as $b)
            <div class="col-12 shadow-sm bg-white p-2 d-flex mb-2 br5">

                <div class="px-2 content">
                    <h1 class="name" >{{ $b->name }}</h1><br>
                    <p class="text"><img src="images/age.png" alt="" class="text-image">{{ $b->age }}</p>
                    <p class="text"><img src="images/gender.png" alt="" class="text-image">{{ $b->gender }}</p>
                    <p class="text"><img src="images/phone.png" alt="" class="text-image">{{ $b->phone }}</p>
                    <p class="text"><img src="images/religion.png" alt="" class="text-image">{{ $b->religion }}</p>
                    <p class="text"><img src="images/cast.png" alt="" class="text-image">{{ $b->cast }}</p>

                     <br>
                    <h1 style="color: red; margin-bottom: 15px;">Partner preferences: </h1>
                    <p class="text"><img src="images/interested.png" alt="" class="text-image">{{ $b->interested_in }}</p>
                    <p class="text"><img src="images/age.png" alt="" class="text-image">{{ $b->age_preference }}</p>
                    <p class="text"><img src="images/religion.png" alt="" class="text-image">{{ $b->religion_preference }}</p>
                    <p class="text"><img src="images/cast.png" alt="" class="text-image">{{ $b->cast_preference }}</p>

                </div>
                <div class="image">
                    <img src="{{ asset('uploads/bd/' . $b->profile_picture) }}" alt="" class="br5" width="100%" height="100%">
                </div>

            </div>
            
            @endforeach
            <br>

        </div>
        <a href="{{ route('welcome') }}"> <button class="floating-button"><img src="images/home.png" alt="" style="height: 15px; width: 15px;"></button></a>
        
    </x-app-layout>
</body>