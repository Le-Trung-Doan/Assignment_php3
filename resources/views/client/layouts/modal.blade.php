<div class="modal" @if(Session::has('msg')||$errors->all()) style="visibility: visible" @endif>
    <div class="modal__overlay">

    </div>
    <div class="modal__body">
        <!-- form login -->
        <div class="auth-form auth-form__signin-form" @if(Session::has('msg')||$errors->all()) style="display: block" @endif>
            <div class="auth-form__header">
                <h3 class="auth-form__heading">
                    Đăng nhập
                </h3>
            </div>
            @if(Session::has('msg'))
                <span class="auth-form__input-error">{{Session::get('msg')}}</span>
            @endif
            <form action="{{route('login.post')}}" method="post">
                @csrf
                <div class="auth-form__group">
                    <input type="text" class="auth-form__input" placeholder="Nhập email" name="email">
                    @error('email')
                    <span class="auth-form__input-error">{{$message}}</span>
                    @enderror
                <!-- <span class="auth-form__input-error"></span> -->
                </div>
                <div class="auth-form__group">
                    <input type="password" class="auth-form__input" placeholder="Nhập password" name="password">
                    @error('password')
                    <span class="auth-form__input-error">{{$message}}</span>
                    @enderror
                    <!-- <span class="auth-form__input-error">Email của bạn đã tồn tại</span> -->
                </div>
                <div class="auth-form__group auth-form__group-btn">
                    <a href="" class="auth-form-forget-password">Quên mật khẩu</a>
                    <button class="btn btn--primary btn-login" type="submit">Đăng nhập</button>
                </div>
            </form>
            <div class="auth-form__or">
                <hr>
                <p>Hoặc</p>
            </div>

            <div class="auth-form__socials">
                <a href="" class="btn btn-width-icon btn-facebook">
                    <i class="fab fa-facebook"></i>
                    Facebook
                </a>
                <a href="" class="btn btn-width-icon btn-google">
                    <i class="fab fa-google"></i>
                    Google
                </a>
            </div>

            <div class="auth-form__footer">
                <h4 class="auth-form__policy-h4">
                    Bạn chưa có tài khoản?
                    <a href="" class=" ">
                        Đăng ký
                    </a>
                </h4>
            </div>

        </div>
        <div class="auth-form auth-form__signup-form">
            <div class="auth-form__header">
                <h3 class="auth-form__heading">
                    Đăng ký
                </h3>
            </div>
            <form action="" method="post">
                @csrf
                <div class="auth-form__group">
                    <input type="text" class="auth-form__input" placeholder="Nhập email" name="email">
                    <!-- <span class="auth-form__input-error">Email của bạn đã tồn tại</span> -->
                </div>
                <div class="auth-form__group">
                    <input type="password" class="auth-form__input" placeholder="Nhập password" name="password">
                    <!-- <span class="auth-form__input-error">Email của bạn đã tồn tại</span> -->
                </div>
                <div class="auth-form__group">
                    <input type="password" class="auth-form__input" placeholder="Nhập lại password" name="re_password">
                    <!-- <span class="auth-form__input-error">Email của bạn đã tồn tại</span> -->
                </div>
                <div class="auth-form__group auth-form__group-btn">
                    <button class="btn btn--primary btn--register" type="submit">
                        Đăng ký
                    </button>
                </div>
            </form>

            <div class="auth-form__or">
                <hr>
                <p>Hoặc</p>
            </div>

            <div class="auth-form__socials">
                <a href="" class="btn btn-width-icon btn-facebook">
                    <i class="fab fa-facebook"></i>
                    Facebook
                </a>
                <a href="" class="btn btn-width-icon btn-google">
                    <i class="fab fa-google"></i>
                    Google
                </a>
            </div>
            <div class="auth-form__aside">
                <p class="auth-form__policy-text">
                    Bằng việc đăng kí, bạn đã đồng ý
                    <a href="" class="auth-form__text-link">
                        Điều khoản dịch vụ
                    </a>
                    &
                    <a href="" class="auth-form__text-link">
                        Chính sách bảo mật
                    </a>
                </p>
            </div>
            <div class="auth-form__footer">
                <h4 class="auth-form__policy-h4">
                    Bạn đã có tài khoản?
                    <a href="" class=" ">
                        Đăng nhập
                    </a>
                </h4>
            </div>
        </div>
    </div>
</div>
