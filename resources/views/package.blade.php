<style>
    .highlight {
  color: red;
  font-weight: bold;
}
    .card-container2 {

display: flex;
justify-content: center;
align-items: center;
flex-wrap: wrap;

}

.card2 {

align-items: center;
width: 270px;
height: 320px;
background-color: #f9f9f9;
border-radius: 10px;
padding: 20px;
margin: 20px;
text-align: center;
transform: scale(1);
transition: transform 0.3s ease;
box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);


}

.card2:hover {
transform: scale(1.1);
box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);

}

.card2 h2 {
font-size: 24px;
margin-bottom: 10px;
}

.card2 h3 {
margin-bottom: 10px;
font-size: 28px;

}

.card2 p {
font-size: 14px;
margin-bottom: 20px;
}

.round-button {
display: inline-block;
padding: 10px 20px;
border-radius: 20px;
background-color: #333;
color: #fff;
text-decoration: none;
box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
}

.round-button:hover {
color: black;
background-color: red;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
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
</style>
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Premium Packages') }}
        </h2>
    </x-slot>

    <p style="font-size: 44px;  text-align: center;margin-top: 20px;"><span class="highlight">Upgrade now</span> & Get
        <span class="highlight">Premium</span> benefits!
      </p>
      <p style="font-size: 32px; text-align: center; margin-bottom: 80px;">Upgrade to any of our Premium Plans and we
        guarantee you will find a match!</p>
      <div class="card-container2">
        <div class="card2">
          <h2>Bronze Package</h2>
          <h3>BDT 2,000/- </h3>
          <p>Sent unlimited contact request</p>
          <p style="opacity: .4;">~View upto 75 contact numbers</p>
          <p style="opacity: .4;">~Let matches contact you directly</p>
          <a href="{{ route('payment') }}" class="round-button">continue</a>
        </div>
    
        <div class="card2">
          <h2>Silver Package</h2>
          <h3>BDT 5,000/- </h3>
          <p>Sent unlimited contact request</p>
          <p>View upto 75 contact numbers</p>
          <p style="opacity: .4;">~Let matches contact you directly</p>
          <a href="{{ route('payment') }}" class="round-button">Continue</a>
        </div>
    
        <div class="card2">
          <h2>Gold Package</h2>
          <h3>BDT 10,000/- </h3>
          <p>Sent unlimited contact request</p>
          <p>View upto 75 contact numbers</p>
          <p>Let matches contact you directly</p>
          <a href="{{ route('payment') }}" class="round-button">Continue</a>
        </div>
    
        <div class="card2">
          <h2>Platinum Package</h2>
          <h3>BDT 15,000/- </h3>
          <p>Sent unlimited contact request</p>
          <p>View upto 100 contact numbers</p>
          <p>Let matches contact you directly</p>
          <a href="{{ route('payment') }}" class="round-button">Continue</a>
        </div>
      </div>

      <a href="{{ route('welcome') }}"> <button class="floating-button"><img src="images/home.png" alt="" style="height: 15px; width: 15px;"></button></a>
</x-app-layout>