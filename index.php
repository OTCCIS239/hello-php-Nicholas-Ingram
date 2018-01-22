<?php

$name = "Nicholas Ingram";
$email = "ni0784722@otc.edu";
$movie = "Grand Budapest Hotel";
$food = "General Chicken";
$technology = "VR";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <h1>Hello PHP!</h1>
        <p class="lead">My name is <?= $name ?> and I'm going to learn you like there's no tomorrow!</p>
        <p>It's a good thing, too, because I'm getting graded on this. To check my grades, I log into Canvas with my student email which is <a href="mailto:<?= $email ?>"><?= $email ?></a>.</p>
        <p>Fortunately, I won't be distracted from my homework by my favorite movie (<?= $movie ?>) or my favorite food (<?= $food ?>) because I'm petrified of my teacher.</p>
        <p>Hopefully I'll stay interested in PHP, even though my favorite picece of technology is <?= $technology ?>.</p>
        <hr>
        <div class="alert alert-info">
            <i class="fas fa-info-circle"></i>
            <a href="http://codemanifesto.com/">The Code Manifesto</a> was was born from frustration with the current state of the technology industry. It is simply a set of values that can all be combined and boiled down into a simple premise: Respect Each Other. The idea behind the Manifesto is that if more people held these values, and kept them top of mind, our industry would be a better place.
        </div>
        <h1>The Code Manifesto</h1>
        <p class="lead">We want to work in an ecosystem that empowers developers to reach their potential--one that encourages growth and effective collaboration. A space that is safe for all.</p>
        <p class="lead">A space such as this benefits everyone that participates in it. It encourages new developers to enter our field. It is through discussion and collaboration that we grow, and through growth that we improve.</p>
        <p>In the effort to create such a place, we hold to these values:</p>
        <ol>
            <li><strong>Discrimination limits us.</strong> This includes discrimination on the basis of race, gender, sexual orientation, gender identity, age, nationality, technology and any other arbitrary exclusion of a group of people.</li>
            <li><strong>Boundaries honor us.</strong> Your comfort levels are not everyone’s comfort levels. Remember that, and if brought to your attention, heed it.</li>
            <li><strong>We are our biggest assets.</strong> None of us were born masters of our trade. Each of us has been helped along the way. Return that favor, when and where you can.</li>
            <li><strong>We are resources for the future.</strong> As an extension of #3, share what you know. Make yourself a resource to help those that come after you.</li>
            <li><strong>Respect defines us.</strong> Treat others as you wish to be treated. Make your discussions, criticisms and debates from a position of respectfulness. Ask yourself, is it true? Is it necessary? Is it constructive? Anything less is unacceptable.</li>
            <li><strong>Reactions require grace.</strong> Angry responses are valid, but abusive language and vindictive actions are toxic. When something happens that offends you, handle it assertively, but be respectful. Escalate reasonably, and try to allow the offender an opportunity to explain themselves, and possibly correct the issue.</li>
            <li><strong>Opinions are just that: opinions.</strong> Each and every one of us, due to our background and upbringing, have varying opinions. That is perfectly acceptable. Remember this: if you respect your own opinions, you should respect the opinions of others.</li>
            <li><strong>To err is human.</strong> You might not intend it, but mistakes do happen and contribute to build experience. Tolerate honest mistakes, and don't hesitate to apologize if you make one yourself.</li>
        </ol>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
</body>
</html>