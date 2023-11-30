@extends('frontend.layout')

@section('content')
<h2>Directors</h2> <i>RedBean Version</i>
      <section id="director">

        <?php
        //the ORM
        /**
         * [
         * ['lname'=>'','fname'=>'',...]
         * ['lname'=>'','fname'=>'',...]
         * ['lname'=>'','fname'=>'',...]
         * ['lname'=>'','fname'=>'',...]
         * ]
         */
       // $results = R::find('staff', ' status=1 AND role="director" ');
       $directors = [];
       $position = 0;
        foreach ($results as $result) :
          $lname = $result['lname'];
          $fname = $result['fname'];
          $fullName = $fname.$lname;
          $designation = $result['short_bio'];
          $email = $result['email_address'];
          $yos = date('Y') - $result['employment_date'];
          $user_image = $result['user_image'];
          $linkedin = $result['linkedin'];
        ?>
          <!-- OUR HTML shorthand echo
          <?php echo $user_image; ?>
          <?=$user_image?>
        -->
          <div class="card">
            <img src="images/<?=$user_image?>" alt="<?=$lname?>" style="width:100%">
            <h1><?=$fullName?></h1>
            <p class="title">Director</p>
            <p>Since <?=$yos?></p>
            <a href="mailto:<?=$email?>"><i class="fa fa-envelope"></i></a>
            <a href="<?=$linkedin?>"><i class="fa fa-brands fa-linkedin"></i></a>
          </div>

        <?php endforeach; ?>
      </section>
      @ebdsection