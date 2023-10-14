<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signin | Mocal's</title>
    <link rel="icon" type="image/x-icon" href="images/fav.png" />
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    <!-- Fonts -->
    <link href="./js/fonts.css" rel="stylesheet" />

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pages/register/register.css') }}" />
    @livewireStyles
  </head>

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

                <div class="bg-white col-4 dark:bg-gray-800 mt-8 offset-4 overflow-hidden shadow sm:rounded-lgg">

                @if(request()->success) 
                <div class="card">
                    <div class="card-header bg-success text-white">Registration completed</div>
                    <div class="card-body">
                        Hello User, thank you for joining us, soon we will approve your registration. </br>
                        Thank you </br></br>
                        <a href="/" class="btn btn-sm btn-primary">Back to home</a>
                    </div>
                </div>
                @endif 

                </div>

            </div>
        </div>

        
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>
<script src="https://cdn.tiny.cloud/1/777soj19kolru4art71pyoei5biguouavgrcgop6xabu7uog/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

                      <script>
                        function chooseCountry() {
                            var country = $(this).attr('data-value');
                            $("#country_code").val(country);
                        }
                    </script>         

    <script type="text/javascript">
    //     $('.step').not(':first').hide();
    
    // // Add click event listeners to the next and previous buttons
    //     $('.next').click(function () {
    
    //         var step = $(this).closest('.step').attr('data-id');
    //         console.log(step);
    
    
    //     // Validate required fields of current step
    //         var $currentStep = $(this).closest('.step');
    //         var $requiredFields = $currentStep.find(':required');
    //         var valid = true;
    //         $requiredFields.each(function () {
    //             if (!this.checkValidity()) {
    //                 valid = false;
    //                 this.reportValidity();
    //                 $(this).focus();
    //             return false; // break out of loop
    //         }
    //     });
    //         if (!valid) {
    //             return false;
    //         }
    
    //         $('#stepList li').removeClass('active');
    //         $('#stepList li').eq(step).addClass('active');
    
    //     // Show next step
    //         $currentStep.hide().next().show();
    //     });
    
    //     $('.prev').click(function () {
    //     // Get the current step index
    //         var step = $(this).closest('.step').attr('data-id');
    //         console.log(step);
    //         $('#stepList li').removeClass('active');
    //         $('#stepList li').eq(step - 2).addClass('active');
    
    //     // Show previous step
    //         $(this).closest('.step').hide().prev().show();
    //     });
    
    //     $('#myForm').on('submit', function (event) {
    //         event.preventDefault();
    
    //     // Validate required fields of last step
    //         var $lastStep = $('.step:last');
    //         var $requiredFields = $lastStep.find(':required');
    //         var valid = true;
    //         $requiredFields.each(function () {
    //             if (!this.checkValidity()) {
    //                 valid = false;
    //                 this.reportValidity();
    //                 $(this).focus();
    //             return false; // break out of loop
    //         }
    //     });
    //         if (!valid) {
    //             return false;
    //         }
    
    //         if ($('.selectedPlan > .primaryPlan').children('.optionPlan').length > 0) {
    //             $(this)[0].submit();
    //         }
    //     });
    </script>

    <script>
      $("#country, .dropdownmenu").dropdown();
      $("#empolsize").dropdown();
      $("#client_list, #social_list").dropdown();

    //   $("#clientvalue").change(function () {
    //     if ($(this).val().length === 0) {
    //       //  alert('yes');
    //       //$(this).parent('.selectWrap').siblings('.profileSection').addClass('extya');
    //       $(".profileSection").css("display", "none");
    //     } else {
    //       //$(this).parent('.selectWrap').siblings('.profileSection').removeClass('extya');
    //       //alert('no');
    //       $(".profileSection").css("display", "block");
    //     }
    //   });
    </script>

    @livewireScripts
  </body>
</html>
