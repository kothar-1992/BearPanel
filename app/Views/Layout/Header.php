<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm align-middle">
        <div class="container px-1">
            <a class="navbar-brand" href="<?= site_url() ?>"><i class="bi bi-box px-2"></i><?= BASE_NAME ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php if (session()->has('userid')) : ?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= site_url('keys') ?>">Keys</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= site_url('keys/generate') ?>">Generate</a>
                        </li>
                       
                    </ul>
                    <div class="float-right">
                        
                          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle pe-2"></i><?= getName($user) ?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="<?= site_url('settings') ?>">
                                            <i class="bi bi-gear"></i> Settings
                                        </a>
                                    </li>
                                    
                                     <hr class="dropdown-divider">
                                    </li>
                                        <li class="dropdown-item text-muted">Tools</li>
                                        <li>
                                            <a class="dropdown-item" href="<?= site_url('Profile') ?>">
                                                <i class="bi bi-person-lines-fill"></i> Profile
                                            </a>
                                        </li>

 
                                     <?php if($user->level == 1) : ?>
                                        <li>

                                            <a class="dropdown-item" href="<?= site_url('keys/extend') ?>">
                                                <i class="bi bi-link-45deg"></i> Key Extend Duration
                                            </a>
                                        </li>
                                        
                                        <?php endif; ?>
                                        <li>
                                    
                                      <?php if($user->level == 1) : ?>      
                                        <hr class="dropdown-divider">
                                    <li>
                               
                                                                           
                                                 <a class="dropdown-item" href="<?= site_url('Server') ?>">
                                                <i class="bi bi-controller"></i> Mod Control
                                            </a>
                                        </li>
                                        
                                        <li>
                                            
                                            <a class="dropdown-item" href="<?= site_url('lib') ?>">
                                                <i class="bi bi-cloud-upload"></i> Online LIB
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="<?= site_url('admin/manage-users') ?>">
                                                <i class="bi bi-card-checklist"></i> Manage Users
                                            </a>
                                        </li>

                                             <?php endif; ?>
                                             </li>
                                        <?php if (($user->level == 1) || ($user->level ==2)) : ?>
                                        <li>
                                            <a class="dropdown-item" href="<?= site_url('admin/create-referral') ?>">
                                                <i class="bi bi-people"></i> Add Resellers
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <li>
                                            <a class="dropdown-item" href="https://telegram.me/kothar1992">
                                                <i class="bi bi-telegram"></i> Get Support
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                    
                                    <li>
                                        <a class="dropdown-item text-danger" href="<?= site_url('logout') ?>">
                                            <i class="bi bi-box-arrow-in-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
            </div>
        <?php endif; ?>

        </div>
    </nav>
</header>