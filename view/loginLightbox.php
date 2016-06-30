   <div class="contact-ct">
                        <h3 class="text-center">
                            Nhập thông tin
                        </h3>
                        <form accept-charset="UTF-8" action="http://shop.khoedep.vn/contact" class="contact-form" method="post">
                            <input name="form_type" type="hidden" value="contact">
                            <input name="utf8" type="hidden" value="✓">

                            <div class="form-group">
                                <input required="" type="text" id="contactFormName" class="form-control input-lg" name="contact[name]" placeholder="Tên của bạn" autocapitalize="words" value="">
                            </div>
                            <div class="form-group">
                                <input required="" type="number" name="contact[phone]" placeholder="Số điện thoại của bạn" id="contactFormPhone" class="form-control input-lg" autocorrect="off" autocapitalize="off" value="">
                            </div>
                            <div class="form-group">
                                <input required="" type="email" name="contact[email]" placeholder="Email của bạn" id="contactFormEmail" class="form-control input-lg" autocorrect="off" autocapitalize="off" value="">
                            </div>
                            <div class="form-group" style="display: none;">
                                <label for="contactFormMessage" class="sr-only">Nội dung</label>
                                <textarea required="" rows="6" name="contact[body]" class="form-control" placeholder="Viết bình luận" id="contactFormMessage"></textarea>
                            </div>

                            <input type="submit" class="btn btn-primary btn-lg" value="Gửi liên hệ">

                        </form>
                    </div>