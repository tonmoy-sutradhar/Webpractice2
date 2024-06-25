<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
  </head>
  <body>
    <h2> Show Registraion Info</h2>
    

    <!-- ////////////////////////General Information//////////////////////////////////// -->

    <table>
      <tr>
        <td>
          <table>
            <tr>
              <td>
                <fieldset>
                  <legend>General Information</legend>
                  <table cellpadding="7">
                    <tr>
                      <!-- <td>:</td> -->
                      <th>First Name :</th>
                      <td><?php echo $first_name = $_POST['first_name'] ?? ''; ?></td>
                    </tr>
                    <tr>
                      <th>Last Name :</th>
                      <td><?php echo $last_name = $_POST['last_name'] ?? ''; ?></td>
                    </tr>
                    <tr>
                      <th>Gender :</th>
                      <td>
                      <?php echo $gender = $_POST['gender'] ?? ''; ?></td>
                      </td>
                    </tr>
                    <tr>
                      <th>Father's Name :</th>
                      <td nowrap>
                      <?php echo $father_name = $_POST['father_name'] ?? ''; ?></td>
                    </tr>
                    <tr>
                      <th>Mother's Name :</th>
                      <td><?php echo $mother_name = $_POST['mother_name'] ?? ''; ?></td>
                    </tr>
                    <tr>
                      <th>Blood Group :</th>
                      <td>
                      <?php echo $blood_group = $_POST['blood_group'] ?? ''; ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Religion :</th>
                      <td>
                      <?php echo $religion = $_POST['religion'] ?? ''; ?>
                      </td>
                    </tr>
                  </table>
                </fieldset>
              </td>
            </tr>
          </table>
        </td>

        <!-- //////////////////Contact Information/////////////////////////////////// -->

        <td>
          <table>
            <tr>
              <td>
                <fieldset>
                  <legend>Contact Information :</legend>
                  <table cellpadding="10">
                    <tr>
                      <th>Email :</th>
                      <td><?php echo $email = $_POST['email'] ?? ''; ?></td>
                    </tr>
                    <tr>
                      <th>Phone/Mobile:</th>
                      <td><?php echo $phone = $_POST['phone'] ?? ''; ?></td>
                    </tr>
                    <tr>
                      <th>Website :</th>
                      <td><?php echo $website = $_POST['website'] ?? ''; ?></td>
                    </tr>
                    <!-- ///////////////// -->

                    <tr>
                      <th nowrap>Address:</th>
                      <td>
                        <fieldset>
                          <legend>Present Address</legend>

                          <table>
                            <tr>
                              <td>
                              <?php echo $location = $_POST['location'] ?? ''; ?>

                              <?php echo $additional_location = $_POST['additional_location'] ?? ''; ?>
                              </td>
                            </tr>
                            <tr>
                              <td>
                              <?php echo $present_address = $_POST['present_address'] ?? ''; ?>
                              </td>
                            </tr>
                            <tr>
                              <td>
                              <?php echo $post_code = $_POST['post_code'] ?? ''; ?>
                              </td>
                            </tr>
                          </table>
                        </fieldset>
                      </td>
                    </tr>
                  </table>
                </fieldset>
              </td>
            </tr>
          </table>
        </td>

        <!-- ////////////////////Account information/////////////////////////////////////// -->

        <td>
          <table>
            <tr>
              <td>
                <fieldset>
                  <legend>Account Information</legend>
                  <table cellpadding="10">
                    <tr>
                      <th>Username :</th>
                      <td><?php echo $username = $_POST['username'] ?? ''; ?></td>
                    </tr>
                    <tr>
                      <th>Password :</th>
                      <td><?php echo $password = $_POST['password'] ?? ''; ?></td>
                    </tr>
                    <tr>
                      <th>Confirm Password :</th>
                      <td><?php echo $confirm_password = $_POST['confirm_password'] ?? ''; ?></td>
                    </tr>
                  </table>
                </fieldset>
                <tr>
                  
                </tr>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
