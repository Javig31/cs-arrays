<?php
  $company = 'Gtz Designs';
  $title = 'History Of Esports';
  $topic = 'Teams';
  $franchise = 'Counterstrike';

  // Let's create a simple array
  $movies = array(
    'Fnatic',
    'G2 Esports',
    'Optic Gaming',
    'Faze Clan',
    'Envy Us',
    'NAVI',
    'SK Gaming',
    'Liquid',
    'Virtus Pro',
    'Cloud 9',
    'Luminosity'
  );

  // Let's create an associative array
  $movieYears = array(
    'Fnatic' => 2008,
    'Liquid' => 2007,
    'Luminosity' => 2003,
    'Optic Gaming' => 2000,
    'Sk Gaming' => 1999,
    'G2 Esports' => 1983,
    'Faze Clan' => 2015,
    'NAVI' => 2016,
    'Virtus Pro' => 2001,
    'Envy Us' => 2002,
    'Cloud 9' => 2017
  );

  // Count how many items are stored in the array $movies
  $moviesLength = count($movies);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <main class="container py-4">
      <h1><?php echo $topic; ?>: <em><?php echo $franchise; ?></em></h1>
      <p>There are <?php echo $moviesLength; ?> teams in the <em><?php echo $franchise; ?></em> franchise.</p>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($movies as $movie) {
              echo '<li class="list-group-item">'.$movie.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($movie);
        ?>
      </ul>
      <p>The best <em><?php echo $franchise; ?></em> team is <em><?php echo $movies[4]; ?></em>.</p>
      <hr>
      <h2 class="h5 mb-4">The <em><?php echo $franchise; ?></em> teams joined in the following years:</h2>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($movieYears as $movie => $year) {
              echo '<li class="list-group-item justify-content-between"><em>'.$movie.'</em> '.$year.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($movie);
        ?>
      </ul>
    </main>
    <footer class="container">
      <hr>
      <?php echo '<p>Copyright &copy; '.date('Y').' '.$company.'. All rights reserved.</p>'; ?> 
  </body>
</html>