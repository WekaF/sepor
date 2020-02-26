

<ul class="nav">

            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">HAI - {{Auth::user()->name}}</p>
                  <p class="designation">Admin</p>
                </div>
              </a>
            </li>

            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="/home">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Transportasi</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="/trayek">Trayek</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/taxi">Taksi</a>
                  </li>
                </ul>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Destinasi</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="/kategori">Kategori</a>
                  </li>
                
                  <li class="nav-item">
                    <a class="nav-link" href="/subkategori">Destinasi</a>
                  </li>

                </ul>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui" aria-expanded="false" aria-controls="ui">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">Informasi Stasiun</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="/keretainfo"> Info Kereta Api </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/jeniska"> jenis Kereta Api </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/stasiuninfo"> Info Stasiun </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/kontak"> Kontak </a>
                  </li>
                  
                </ul>
              </div>
            </li>
</ul>
      
                    
                    