<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <style>
        .container {   
          margin-top: 30px;    
          max-width: 900px;
        }
    
        h1 {
          text-align: center;
        }
    
        .story {
          width: 100%; 
          margin-bottom: 20px;
          padding: 20px;
          background-color: #ffffff;
          border-radius: 5px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
          display: inline-block;
          align-items:  center;
        }
    
        .couple {
          width: 100%;
          display: flex;
          align-items: center;
          justify-content: center;
          margin-bottom: 20px;
        }
    
        .couple img {
          width: 180px;
          height: 180px;
          object-fit: cover;
          border-radius: 50%;
          transform: scale(1);
          transition: transform 0.2s ease-out;
        }
        .couple img:hover{
          transform: scale(0.9);
        }
    
        .weds {
          font-size: 35px;
          font-weight: bold;
          font-family: Dancing Script;
          margin-left: 80px;
          margin-right: 80px;
        }
    
        .names {
            
        position: relative;
          font-size: 24px;
          font-weight: bold;
        }
    
        .content {
          margin-top: 10px;
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

.floating-button2 {
        height: 55px;
        width: 55px;
            position: fixed;
            bottom: 100px; /* Adjust the bottom distance as per your preference */
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
        .floating-button2:hover {       
  opacity: 0.8; /* Reduce opacity on hover */
}



      </style>
</head>

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Successful Stories') }}
        </h2>
    </x-slot>


 
        <div class="container">
        @foreach($story as $s)
          <div class="story">
            <div class="couple">
              <img src="{{ asset('uploads/bd/'.$s->groom_picture) }}" alt="Couple 1">
              <div class="weds">weds</div>
              <img src="{{ asset('uploads/bd/'.$s->bride_picture) }}" alt="Couple 2">
            </div>
            <div class="names">{{ $s->title }}</div>
            <div class="content">{{ $s->story }}</div>
          </div>
          @endforeach

        </div>
        <a href="{{ route('submit_story') }}"> <button class="floating-button2">+</button></a>
        <a href="{{ route('welcome') }}"> <button class="floating-button"><img src="images/home.png" alt="" style="height: 15px; width: 15px;"></button></a>


</x-app-layout>