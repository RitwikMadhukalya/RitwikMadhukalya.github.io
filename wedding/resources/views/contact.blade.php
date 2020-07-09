<div class="img3" id="contact">
    <div style="background-color: rgba(0, 0, 0, 0.7); height:100vh; margin-top:0px; padding-top:70px;">
        <div class="row" style="margin-right: 150px">
            <div class="col-md-6 offset-md-6" style="text-align: center; background-color: rgba(255, 255, 255, .8); margin-right:50px; border-radius:20px; color:black">
                <h1 class="contact" style="padding-top:30px;">Contact <span>Us</span></h1><br>
                <div class="container" style="padding-bottom: 20px;">
                    <form action="" method="GET">
                        @csrf
                        <div class="form-group">
                            <!-- <label name="email">Email:</label> -->
                            <input type="name" name="name" class="form-control" id="name" placeholder="Full Name" autocomplete="none">
                        </div>
                        <div class="form-group">
                            <!-- <label name="email">Email:</label> -->
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" autocomplete="none">
                        </div>
                        <div class="form-group">
                            <!-- <label name="subject">Subject:</label> -->
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone number">
                        </div>
                        <div class="form-group">
                            <!-- <label name="message">Message:</label>
                            <input type="text" name="message" class="form-control" id="message"> -->
                            <textarea placeholder="Type your Message Here...." rows="10" tabindex="10" class="form-control"></textarea>
                        </div>
                        <button class="btn submit-btn" type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>