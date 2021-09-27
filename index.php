<?php
$xmlData = simplexml_load_file("xml_doc/data_cv.xml");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Member</title>
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <header>
        <div class="nav-bar container">
            <div class="nav-title">
                <h3>CV - Member of Team 2</h3>
            </div>
            <div class="nav-item">
                <ul>
                    <li><a href="#1">Sekar</a></li>
                    <li><a href="#2">Arik</a></li>
                    <li><a href="#3">Julia</a></li>
                </ul>
            </div>
        </div>
    </header>
    <?php foreach ($xmlData->children() as $member) : ?>
        <div class="container main-content" id="<?= $member["id"] ?>">
            <div class="profile">
                <div class="img">
                    <img src="assets/img/<?= $member->profile->photo ?>" alt="" class="profile-img">
                </div>
                <p id="name">
                    <?= $member->profile->fullname ?> <br>
                    <span id="email"><?= $member->contacts->email ?></span><br>
                </p>
                <p id="profession">
                    <?= $member->profile->profession ?> <br>
                    <?= $member->profile->section ?> <br>
                    <span id="college"><?= $member->profile->instantion ?></span>
                </p>
                <hr width="100%">
                <div class="about">
                    <p style="display: inline;">Skills</p>
                </div>
                <ul id="skills">
                    <?php foreach ($member->skills->children() as $skill) : ?>
                        <li><?= $skill->sk_name ?> <span>- <?= $skill->percentage ?>%</span></li>
                    <?php endforeach ?>
                </ul>
                <!-- <p id="hobbies">
                    Hobbies <br>
                    <?php foreach ($member->hobbies->children() as $hobby) : ?>
                        <span><?= $hobby ?> </span>
                    <?php endforeach ?>
                </p> -->
                <p id="telephone">
                    Phone Number <br>
                    <span id="phone"><?= $member->contacts->phone_number ?></span>
                </p>
                <div class="social-links">
                    <a href="<?= $member->contacts->facebook ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?= $member->contacts->twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="<?= $member->contacts->linkedin ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="<?= $member->contacts->github ?>" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="<?= $member->contacts->instagram_account ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="<?= $member->contacts->discord ?>" target="_blank"><i class="fab fa-discord"></i></a>
                </div>
            </div>
            <div class="card-container">
                <div class="card-row">
                    <div class="card education">
                        <div class="card-body">
                            <p>
                                <i class="fas fa-graduation-cap stroke-transparent"></i>&nbsp;&nbsp;&nbsp;Education
                            </p>
                            <ul>
                                <?php foreach ($member->education->children() as $school) : ?>
                                    <li class="tags">
                                        <?= $school->sch_name ?> <br>
                                        <span><span>(<?= $school->sch_from ?> - <?= $school->sch_until ?>)</span></span>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                    <div class="card organizations">
                        <div class="card-body">
                            <p>
                                <i class="fas fa-users stroke-transparent"></i>&nbsp;&nbsp;&nbsp;Organizations
                            </p>
                            <ul>
                                <?php foreach ($member->organizations->children() as $organization) : ?>
                                    <li class="tags">
                                        <?= $organization->org_name ?> <br>
                                        <span><span>(<?= $organization->org_from ?> - <?= $organization->org_until ?>)</span></span>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-row">
                    <div class="card achievements">
                        <div class="card-body">
                            <p>
                                <i class="fas fa-award stroke-transparent"></i>&nbsp;&nbsp;&nbsp;Achievements
                            </p>
                            <ul>
                                <?php foreach ($member->achievements->children() as $achievement) : ?>
                                    <li class="tags">
                                        <?= $achievement ?>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                    <div class="card skill">
                        <div class="card-body">
                            <p>
                                <i class="fas fa-briefcase stroke-transparent"></i>&nbsp;&nbsp;&nbsp;Workshop or Seminar
                            </p>
                            <ul>
                                <?php foreach ($member->courses->children() as $course) : ?>
                                    <li class="tags">
                                        <?= $course ?> <br>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    <?php endforeach; ?>
</body>

</html>