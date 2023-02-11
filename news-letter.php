<!-- ##### Newsletter Area Start ###### -->
<section class="newsletter-area pt-4 bg-img jarallax" style="background-image: url(img/homepage/6.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-lg-8">
                <div class="nl-content text-center">
                    <h2>Subscribe to our newsletter,<br> The Trailblazer</h2>

                    <form method="post" id="subscribeForm" name="subscribe" onsubmit="return checkForm(this);">
                        <input style="border-radius:10px" type="email" name="EMAIL" id="nlemail"
                            placeholder="Your e-mail" required>



                        <div class="form-group">
                            <div class="checkbox" style="margin-top:30px;">
                                <label><input style="width:auto;height:auto;" name="tc-pp" type="checkbox" value=""
                                        required> By signing up
                                    for our free
                                    monthly e-newsletter Trailblazer,
                                    you agree to our <a href="assets/privacy_and_legal/Terms_and_conditions_Euro_Exim_Bank.pdf" style="font-size: 12px;color: white;">Terms &
                                        Conditions</a>, <a href="assets/privacy_and_legal/Privacy_Policy_EuroEximBank.pdf" style="font-size: 12px;color: white;">Privacy
                                        Policy</a>.
                                </label>
                                <!-- <label><input style="width:auto;height:auto;" name="newsletter" type="checkbox"
                                        value="">
                                    Yes, please keep
                                    me informed
                                    about news, updates, promotions
                                    and offers from Euro Exim Bank. <br> <br>
                                </label> -->
                                <P style="font-size:10px;">(Euro Exim Bank is in
                                    compliance with General Data Protection Regulation (GDPR)
                                    introduced across Europe on 25 May 2018.)</P>
                            </div>
                        </div>
                        <button class="btn credit-btn" style="border-radius:10px;position: relative;" name="submit"
                            type="submit">Subscribe</button>


                        <?php
                                                $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
                                                unset($_SESSION['msg']);
                                                echo $statusMsg;
                                            ?>

                    </form>


                    <!-- <form method="post" name="subscribe"  onsubmit="return checkForm(this);">
                        <input type="email" name="EMAIL" id="nlemail" placeholder="Your e-mail">
                    

                       <div class="form-group">
                            <div class="checkbox" style="margin-top:30px;">
                                <label><input style="width: 3%;height: 15px;" name="tc-pp" type="checkbox" value="" required> By signing up
                                    for our free
                                    monthly e-newsletter Trailblazer,
                                    you agree to our <a href="#!" style="font-size: 12px;color: white;">Terms &
                                        Conditions</a>, <a href="#!" style="font-size: 12px;color: white;">Privacy
                                        Policy</a>.
                                </label>
                                <label><input style="width: 3%;height: 15px;" name="newsletter" type="checkbox" value=""> Yes, please keep
                                    me informed
                                    about news, updates, promotions
                                    and offers from Euro Exim Bank. <br> <br>
                                    Euro Exim Bank is in
                                    compliance with General Data Protection Regulation (GDPR)
                                    introduced across Europe on 25 May 2018.</label>
                            </div>
                        </div>
                         <button name="submit" type="submit">Subscribe</button>
                        

                        <?php
                            $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
                            unset($_SESSION['msg']);
                            echo $statusMsg;
                        ?>

                    </form> -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Newsletter Area End ###### -->

<script>

    document.addEventListener("DOMContentLoaded", function () {
        var elements = document.getElementsByName("tc-pp");
        for (var i = 0; i < elements.length; i++) {
            elements[i].oninvalid = function (e) {
                e.target.setCustomValidity("");
                if (!e.target.validity.valid) {
                    e.target.setCustomValidity("Agree to our terms and conditions");
                }
            };
            elements[i].oninput = function (e) {
                e.target.setCustomValidity("");
            };
        }
    })



   

</script>