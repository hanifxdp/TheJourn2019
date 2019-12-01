<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$judul;?></title>
</head>
<body>
    <div class="root">
        <div id="_next">
            <div class="layout-style">
                <header>
                <a href="<?php echo base_url();?>">
                    <img class="logo" src="<?php echo base_url(); ?>Asset/images/judul.png" width="272" height="50">
                </a>
                </header>
                <form method="post" action="<?= base_url('User/profile');?>">
                <main class="full-body">
                    <div class="main-container">
                        <h1 class="tulisan-edit-profile">
                            Edit Profile.
                        </h1>
                        <div size="150" class="photos">
                        <a href="<?php echo base_url();?>User">
                            <img src="<?php echo base_url()?>Asset/images/kudaliar.png" class="photos-picture">
                        </a>
                        </div>
                        <div class="name-profile">
                            <label>Name</label><br>
                            <input type="text" placeholder="Your Name" class="your-name">
                        </div>
                        <div class="bio-profile">
                            <label>Bio</label>
                            <input type="text" placeholder="Your bio">
                        </div>
                      
                        
                        <button height="48px" width="120px" font-size="18px" class="button-save">Save</button>
                    </div>
                </main>
                </form>
            </div>
        </div>
    </div>
</body>
</html>