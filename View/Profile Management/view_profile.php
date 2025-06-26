<?php
  session_start();
  if(!isset($_SESSION['login_email']) && !isset($_COOKIE['login_email'])){
    header('Location: ../User Authentication/login.php');
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../Assets/general.css" />
    <link
      rel="stylesheet"
      href="../../Assets/Profile Management/profile_management.css"
    />

    <title>HMC - Your most reliable companion</title>
  </head>

      <!------------------------------------ MAIN SECTION ------------------------------------>


  <body>
    <header>
    </header>



    <main id="view-profile-main">
      <h1 id="heading">Profile</h1>
      <div id="info-container-view">
        <div class="input-container pro-pic-container">
          <label class="info-label">Profile Picture</label>
          <img
            id="profile-picture"
            src="../../Assets/Images/sample-pro-pic.JPG"
            alt="Profile Picture"
          />
        </div>
        <div class="input-container-view">
          <label class="info-label" for="user-name">Name: </label>
          <p class="info-field" id="user-name" name="user-name">Nafiz Ahamed</p>
        </div>
        <div class="input-container-view">
          <label class="info-label" for="user-phone">Mobile: </label>
          <p class="info-field" id="user-phone" name="user-phone">
            01746670010
          </p>
        </div>
        <div class="input-container-view">
          <label class="info-label" for="user-email">Email: </label>
          <p class="info-field" id="user-email" name="user-email">
            Nafiz@gmail.com
          </p>
        </div>
        <div class="input-container-view">
          <label class="info-label" for="user-pass">Password: </label>
          <p class="info-field" id="user-pass" name="user-pass">
            **************
          </p>
          <a class="small-button update-button" href="update_pass.php"
            >Update</a
          >
        </div>
        <div class="input-container pro-pic-container">
          <label class="info-label">Digital Signature:</label>
          <img
            id="digital-signature"
            src="../../Assets/Images/Profile Management/Sample Signature.png"
            alt="Digital Signature"
          />
        </div>
        <div class="input-container-view">
          <label class="info-label" for="user-blood-group">Blood Group: </label>
          <p class="info-field" id="user-blood-group" name="user-blood-group">
            A+
          </p>
        </div>
        <div class="input-container-view">
          <label class="info-label" for="user-dob">Date of Birth:</label>
          <p class="info-field" id="user-dob" name="user-dob">28/6/2002</p>
        </div>
        <div class="input-container-view">
          <label class="info-label" for="user-address">Present Address:</label>
          <p id="user-address" class="info-field" name="user-address">
            House-10, Lane-3, Mirpur-10, Dhaka-1216
          </p>
        </div>
        <div class="input-container-view">
          <label class="info-label" for="user-city">City:</label>
          <p class="info-field" id="user-city" name="user-city">Dhaka</p>
        </div>
        <div class="input-container-view">
          <label class="info-label" for="user-em-name"
            >Emergency Contact Name:</label
          >
          <p class="info-field" id="user-em-name" name="user-em-name">
            Harun Or Rashid
          </p>
        </div>
        <div class="input-container-view">
          <label class="info-label" for="user-em-relation"
            >Emergency Contact Relation:</label
          >
          <p class="info-field" id="user-em-relation" name="user-em-relation">
            Brother
          </p>
        </div>
        <div class="input-container-view">
          <label class="info-label" for="user-em-phone"
            >Emergency Contact Number:</label
          >
          <p class="info-field" id="user-em-phone" name="user-em-phone">
            +8801703944467
          </p>
        </div>
        <a href="../Basic Billing/charge_capture.php" class="link-button" id="pay-bill">Pay Bill</a>
        <a href="../Staff Management/staff_list.php" class="link-button" id="manage-staff">Manage Staff</a>
        <a href="edit_profile.php" class="link-button">Edit</a>
        <a href="../../Controller/Profile Management/logout.php" class="link-button">Logout</a>
      </div>
    </main>

    <!-------------------------------------- GENERAL --------------------------------------->

    <footer>
      <section id="footer-main">
        <div id="general-info">
          <h2 id="general-info-heading" class="footer-heading">
            HERITAGE MEDICAL CENTER
          </h2>
          <div id="general-info-main" class="footer-info-container">
            <svg
              class="footer-icon"
              data-name="location-icon"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 14.64 18.35"
            >
              <g>
                <path
                  d="m7.32,0C3.28,0,0,3.28,0,7.32c0,2.95,3.9,7.94,6.01,10.43.69.81,1.94.81,2.63,0,2.11-2.48,6.01-7.48,6.01-10.43C14.64,3.28,11.36,0,7.32,0Zm0,8.72c-.96,0-1.75-.78-1.75-1.75s.78-1.75,1.75-1.75,1.75.78,1.75,1.75-.78,1.75-1.75,1.75Z"
                />
              </g>
            </svg>
            <p class="footer-info-text-nonhover">
              408/1 (Old KA 66/1) <br />
              Kuratoli, Khilkhet <br />
              Dhaka 1229
            </p>
            <svg
              class="footer-icon"
              data-name="phone-icon"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 13.29 19.61"
            >
              <g id="ELEMENTS">
                <path
                  d="m10.9,0H2.4C1.07,0,0,1.07,0,2.4v14.82c0,1.32,1.07,2.4,2.4,2.4h8.5c1.32,0,2.4-1.07,2.4-2.4V2.4c0-1.32-1.07-2.4-2.4-2.4Zm-3.2,17.73h-2.09c-.64,0-1.15-.51-1.15-1.15s.51-1.15,1.15-1.15h2.09c.64,0,1.15.51,1.15,1.15s-.51,1.15-1.15,1.15Z"
                />
              </g>
            </svg>
            <p class="footer-info-text">01744-446-666</p>
            <svg
              class="footer-icon"
              data-name="mail-icon"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 19.39 14.93"
            >
              <g id="ELEMENTS">
                <g>
                  <path
                    d="m19.2,1.38s-.05.07-.08.11l-6.62,7.51c-.71.81-1.73,1.27-2.81,1.27-1.07,0-2.1-.46-2.81-1.27L.18,1.39c-.12.28-.18.58-.18.9v8.61c0,2.22,1.8,4.03,4.03,4.03h11.34c2.22,0,4.03-1.8,4.03-4.03V2.29c0-.32-.07-.63-.19-.91Z"
                  />
                  <path
                    d="m8.39,7.66c.33.38.79.59,1.3.59s.97-.21,1.3-.59L17.61.15s.05-.05.08-.07c-.19-.05-.39-.08-.59-.08H2.28c-.2,0-.39.03-.58.08l6.69,7.59Z"
                  />
                </g>
              </g>
            </svg>
            <p class="footer-info-text">info@heritagemedical.com</p>
          </div>
        </div>
        <div id="location-bashundhara">
          <h2 id="bashundhara-heading" class="footer-heading">BASHUNDHARA</h2>
          <div id="bashundhara-main" class="footer-info-container">
            <svg
              class="footer-icon"
              data-name="location"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 14.64 18.35"
            >
              <g>
                <path
                  d="m7.32,0C3.28,0,0,3.28,0,7.32c0,2.95,3.9,7.94,6.01,10.43.69.81,1.94.81,2.63,0,2.11-2.48,6.01-7.48,6.01-10.43C14.64,3.28,11.36,0,7.32,0Zm0,8.72c-.96,0-1.75-.78-1.75-1.75s.78-1.75,1.75-1.75,1.75.78,1.75,1.75-.78,1.75-1.75,1.75Z"
                />
              </g>
            </svg>
            <p class="footer-info-text-nonhover">
              123, Block F <br />
              Plot 23#B <br />
              Bashundhara, Dhaka 1229
            </p>
            <svg
              class="footer-icon"
              data-name="phone-icon"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 13.29 19.61"
            >
              <g id="ELEMENTS">
                <path
                  d="m10.9,0H2.4C1.07,0,0,1.07,0,2.4v14.82c0,1.32,1.07,2.4,2.4,2.4h8.5c1.32,0,2.4-1.07,2.4-2.4V2.4c0-1.32-1.07-2.4-2.4-2.4Zm-3.2,17.73h-2.09c-.64,0-1.15-.51-1.15-1.15s.51-1.15,1.15-1.15h2.09c.64,0,1.15.51,1.15,1.15s-.51,1.15-1.15,1.15Z"
                />
              </g>
            </svg>
            <p class="footer-info-text">01354-777-333</p>
            <svg
              class="footer-icon"
              data-name="phone-icon"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 13.29 19.61"
            >
              <g id="ELEMENTS">
                <path
                  d="m10.9,0H2.4C1.07,0,0,1.07,0,2.4v14.82c0,1.32,1.07,2.4,2.4,2.4h8.5c1.32,0,2.4-1.07,2.4-2.4V2.4c0-1.32-1.07-2.4-2.4-2.4Zm-3.2,17.73h-2.09c-.64,0-1.15-.51-1.15-1.15s.51-1.15,1.15-1.15h2.09c.64,0,1.15.51,1.15,1.15s-.51,1.15-1.15,1.15Z"
                />
              </g>
            </svg>
            <p class="footer-info-text">01533-544-211</p>
            <svg
              class="footer-icon"
              data-name="mail-icon"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 19.39 14.93"
            >
              <g id="ELEMENTS">
                <g>
                  <path
                    d="m19.2,1.38s-.05.07-.08.11l-6.62,7.51c-.71.81-1.73,1.27-2.81,1.27-1.07,0-2.1-.46-2.81-1.27L.18,1.39c-.12.28-.18.58-.18.9v8.61c0,2.22,1.8,4.03,4.03,4.03h11.34c2.22,0,4.03-1.8,4.03-4.03V2.29c0-.32-.07-.63-.19-.91Z"
                  />
                  <path
                    d="m8.39,7.66c.33.38.79.59,1.3.59s.97-.21,1.3-.59L17.61.15s.05-.05.08-.07c-.19-.05-.39-.08-.59-.08H2.28c-.2,0-.39.03-.58.08l6.69,7.59Z"
                  />
                </g>
              </g>
            </svg>
            <p class="footer-info-text">info@heritagemedical.com</p>
          </div>
        </div>
        <div id="location-dhanmondi">
          <h2 id="dhanmondi-heading" class="footer-heading">DHANMONDI</h2>
          <div id="dhanmondi-main" class="footer-info-container">
            <svg
              class="footer-icon"
              data-name="location"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 14.64 18.35"
            >
              <g>
                <path
                  d="m7.32,0C3.28,0,0,3.28,0,7.32c0,2.95,3.9,7.94,6.01,10.43.69.81,1.94.81,2.63,0,2.11-2.48,6.01-7.48,6.01-10.43C14.64,3.28,11.36,0,7.32,0Zm0,8.72c-.96,0-1.75-.78-1.75-1.75s.78-1.75,1.75-1.75,1.75.78,1.75,1.75-.78,1.75-1.75,1.75Z"
                />
              </g>
            </svg>
            <p class="footer-info-text-nonhover">
              Suvastu Zenim Plaza <br />
              House 312, Road 16 <br />
              Dhanmondi R/A, Dhaka 1205
            </p>
            <svg
              class="footer-icon"
              data-name="phone-icon"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 13.29 19.61"
            >
              <g id="ELEMENTS">
                <path
                  d="m10.9,0H2.4C1.07,0,0,1.07,0,2.4v14.82c0,1.32,1.07,2.4,2.4,2.4h8.5c1.32,0,2.4-1.07,2.4-2.4V2.4c0-1.32-1.07-2.4-2.4-2.4Zm-3.2,17.73h-2.09c-.64,0-1.15-.51-1.15-1.15s.51-1.15,1.15-1.15h2.09c.64,0,1.15.51,1.15,1.15s-.51,1.15-1.15,1.15Z"
                />
              </g>
            </svg>
            <p class="footer-info-text">01843-390-224</p>
            <svg
              class="footer-icon"
              data-name="phone-icon"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 13.29 19.61"
            >
              <g id="ELEMENTS">
                <path
                  d="m10.9,0H2.4C1.07,0,0,1.07,0,2.4v14.82c0,1.32,1.07,2.4,2.4,2.4h8.5c1.32,0,2.4-1.07,2.4-2.4V2.4c0-1.32-1.07-2.4-2.4-2.4Zm-3.2,17.73h-2.09c-.64,0-1.15-.51-1.15-1.15s.51-1.15,1.15-1.15h2.09c.64,0,1.15.51,1.15,1.15s-.51,1.15-1.15,1.15Z"
                />
              </g>
            </svg>
            <p class="footer-info-text">01624-999-329</p>
            <svg
              class="footer-icon"
              data-name="mail-icon"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 19.39 14.93"
            >
              <g id="ELEMENTS">
                <g>
                  <path
                    d="m19.2,1.38s-.05.07-.08.11l-6.62,7.51c-.71.81-1.73,1.27-2.81,1.27-1.07,0-2.1-.46-2.81-1.27L.18,1.39c-.12.28-.18.58-.18.9v8.61c0,2.22,1.8,4.03,4.03,4.03h11.34c2.22,0,4.03-1.8,4.03-4.03V2.29c0-.32-.07-.63-.19-.91Z"
                  />
                  <path
                    d="m8.39,7.66c.33.38.79.59,1.3.59s.97-.21,1.3-.59L17.61.15s.05-.05.08-.07c-.19-.05-.39-.08-.59-.08H2.28c-.2,0-.39.03-.58.08l6.69,7.59Z"
                  />
                </g>
              </g>
            </svg>
            <p class="footer-info-text">info@heritagemedical.com</p>
          </div>
        </div>
        <div id="location-uttara">
          <h2 id="uttara-heading" class="footer-heading">UTTARA</h2>
          <div id="uttara-main" class="footer-info-container">
            <svg
              class="footer-icon"
              data-name="location"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 14.64 18.35"
            >
              <g>
                <path
                  d="m7.32,0C3.28,0,0,3.28,0,7.32c0,2.95,3.9,7.94,6.01,10.43.69.81,1.94.81,2.63,0,2.11-2.48,6.01-7.48,6.01-10.43C14.64,3.28,11.36,0,7.32,0Zm0,8.72c-.96,0-1.75-.78-1.75-1.75s.78-1.75,1.75-1.75,1.75.78,1.75,1.75-.78,1.75-1.75,1.75Z"
                />
              </g>
            </svg>
            <p class="footer-info-text-nonhover">
              Ahmed Plaza, Plot 6, Road 2 <br />
              Sector 3, Uttara Model Town <br />
              Dhaka 1230
            </p>
            <svg
              class="footer-icon"
              data-name="phone-icon"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 13.29 19.61"
            >
              <g id="ELEMENTS">
                <path
                  d="m10.9,0H2.4C1.07,0,0,1.07,0,2.4v14.82c0,1.32,1.07,2.4,2.4,2.4h8.5c1.32,0,2.4-1.07,2.4-2.4V2.4c0-1.32-1.07-2.4-2.4-2.4Zm-3.2,17.73h-2.09c-.64,0-1.15-.51-1.15-1.15s.51-1.15,1.15-1.15h2.09c.64,0,1.15.51,1.15,1.15s-.51,1.15-1.15,1.15Z"
                />
              </g>
            </svg>
            <p class="footer-info-text">01922-334-455</p>
            <svg
              class="footer-icon"
              data-name="phone-icon"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 13.29 19.61"
            >
              <g id="ELEMENTS">
                <path
                  d="m10.9,0H2.4C1.07,0,0,1.07,0,2.4v14.82c0,1.32,1.07,2.4,2.4,2.4h8.5c1.32,0,2.4-1.07,2.4-2.4V2.4c0-1.32-1.07-2.4-2.4-2.4Zm-3.2,17.73h-2.09c-.64,0-1.15-.51-1.15-1.15s.51-1.15,1.15-1.15h2.09c.64,0,1.15.51,1.15,1.15s-.51,1.15-1.15,1.15Z"
                />
              </g>
            </svg>
            <p class="footer-info-text">01999-399-234</p>
            <svg
              class="footer-icon"
              data-name="mail-icon"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 19.39 14.93"
            >
              <g id="ELEMENTS">
                <g>
                  <path
                    d="m19.2,1.38s-.05.07-.08.11l-6.62,7.51c-.71.81-1.73,1.27-2.81,1.27-1.07,0-2.1-.46-2.81-1.27L.18,1.39c-.12.28-.18.58-.18.9v8.61c0,2.22,1.8,4.03,4.03,4.03h11.34c2.22,0,4.03-1.8,4.03-4.03V2.29c0-.32-.07-.63-.19-.91Z"
                  />
                  <path
                    d="m8.39,7.66c.33.38.79.59,1.3.59s.97-.21,1.3-.59L17.61.15s.05-.05.08-.07c-.19-.05-.39-.08-.59-.08H2.28c-.2,0-.39.03-.58.08l6.69,7.59Z"
                  />
                </g>
              </g>
            </svg>
            <p class="footer-info-text">info@heritagemedical.com</p>
          </div>
        </div>
        <div id="location-mirpur">
          <h2 id="mirpur-heading" class="footer-heading">MIRPUR</h2>
          <div id="mirpur-main" class="footer-info-container">
            <svg
              class="footer-icon"
              data-name="location"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 14.64 18.35"
            >
              <g>
                <path
                  d="m7.32,0C3.28,0,0,3.28,0,7.32c0,2.95,3.9,7.94,6.01,10.43.69.81,1.94.81,2.63,0,2.11-2.48,6.01-7.48,6.01-10.43C14.64,3.28,11.36,0,7.32,0Zm0,8.72c-.96,0-1.75-.78-1.75-1.75s.78-1.75,1.75-1.75,1.75.78,1.75,1.75-.78,1.75-1.75,1.75Z"
                />
              </g>
            </svg>
            <p class="footer-info-text-nonhover">
              Plot 1, Road 5 <br />
              Block A, Section 10 <br />
              Mirpur, Dhaka 1216
            </p>
            <svg
              class="footer-icon"
              data-name="phone-icon"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 13.29 19.61"
            >
              <g id="ELEMENTS">
                <path
                  d="m10.9,0H2.4C1.07,0,0,1.07,0,2.4v14.82c0,1.32,1.07,2.4,2.4,2.4h8.5c1.32,0,2.4-1.07,2.4-2.4V2.4c0-1.32-1.07-2.4-2.4-2.4Zm-3.2,17.73h-2.09c-.64,0-1.15-.51-1.15-1.15s.51-1.15,1.15-1.15h2.09c.64,0,1.15.51,1.15,1.15s-.51,1.15-1.15,1.15Z"
                />
              </g>
            </svg>
            <p class="footer-info-text">01733-293-191</p>
            <svg
              class="footer-icon"
              data-name="phone-icon"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 13.29 19.61"
            >
              <g id="ELEMENTS">
                <path
                  d="m10.9,0H2.4C1.07,0,0,1.07,0,2.4v14.82c0,1.32,1.07,2.4,2.4,2.4h8.5c1.32,0,2.4-1.07,2.4-2.4V2.4c0-1.32-1.07-2.4-2.4-2.4Zm-3.2,17.73h-2.09c-.64,0-1.15-.51-1.15-1.15s.51-1.15,1.15-1.15h2.09c.64,0,1.15.51,1.15,1.15s-.51,1.15-1.15,1.15Z"
                />
              </g>
            </svg>
            <p class="footer-info-text">01511-291-133</p>
            <svg
              class="footer-icon"
              data-name="mail-icon"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 19.39 14.93"
            >
              <g id="ELEMENTS">
                <g>
                  <path
                    d="m19.2,1.38s-.05.07-.08.11l-6.62,7.51c-.71.81-1.73,1.27-2.81,1.27-1.07,0-2.1-.46-2.81-1.27L.18,1.39c-.12.28-.18.58-.18.9v8.61c0,2.22,1.8,4.03,4.03,4.03h11.34c2.22,0,4.03-1.8,4.03-4.03V2.29c0-.32-.07-.63-.19-.91Z"
                  />
                  <path
                    d="m8.39,7.66c.33.38.79.59,1.3.59s.97-.21,1.3-.59L17.61.15s.05-.05.08-.07c-.19-.05-.39-.08-.59-.08H2.28c-.2,0-.39.03-.58.08l6.69,7.59Z"
                  />
                </g>
              </g>
            </svg>
            <p class="footer-info-text">info@heritagemedical.com</p>
          </div>
        </div>
      </section>
      <section id="footer-copyright">
        <p id="copyright-text">Copyright &copy; 2025 Heritage Medical Center</p>
      </section>
    </footer>

    <script src="../../Controller/Profile Management/view_profile_validation.js"></script>
  </body>
</html>
a
