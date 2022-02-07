<style>

    /*          Form Style          */
    :root {
        --white: #afafaf;
        --red: #e31b23;
        --bodyColor: #292a2b;
        --borderFormEls: hsl(0, 0%, 10%);
        --bgFormEls: hsl(0, 0%, 14%);
        --bgFormElsFocus: hsl(0, 7%, 20%);
    }

    /* RESET RULES
    –––––––––––––––––––––––––––––––––––––––––––––––––– */

    a {
        color: inherit;
    }

    input,
    select,
    textarea,
    button {
        font-family: inherit;
        font-size: 100%;
    }

    button,
    label {
        cursor: pointer;
    }

    select {
        appearance: none;
    }

    /* Remove native arrow on IE */
    select::-ms-expand {
        display: none;
    }

    /*Remove dotted outline from selected option on Firefox*/
    /*https://stackoverflow.com/questions/3773430/remove-outline-from-select-box-in-ff/18853002#18853002*/
    /*We use !important to override the color set for the select on line 99*/
    select:-moz-focusring {
        color: transparent !important;
        text-shadow: 0 0 0 var(--white);
    }

    textarea {
        resize: none;
    }

    ul {
        list-style: none;
    }



    /* FORM ELEMENTS
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
    .my-form h1 {
        margin-bottom: 1.5rem;
    }

    .my-form li,
    .my-form .grid > *:not(:last-child) {
        margin-bottom: 1.5rem;
    }

    .my-form select,
    .my-form input,
    .my-form textarea,
    .my-form button {
        width: 100%;
        line-height: 1.5;
        padding: 15px 10px;
        border: 1px solid var(--borderFormEls);
        color: var(--white);
        background: var(--bgFormEls);
        transition: background-color 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25),
        transform 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
    }

    .my-form textarea {
        height: 170px;
    }

    .my-form ::placeholder {
        color: inherit;
        /*Fix opacity issue on Firefox*/
        opacity: 1;
    }

    .my-form select:focus,
    .my-form input:focus,
    .my-form textarea:focus,
    .my-form button:enabled:hover,
    .my-form button:focus,
    .my-form input[type="checkbox"]:focus + label {
        background: var(--bgFormElsFocus);
    }

    .my-form select:focus,
    .my-form input:focus,
    .my-form textarea:focus {
        transform: scale(1.02);
    }

    .my-form *:required,
    .my-form select {
        background-repeat: no-repeat;
        background-position: center right 12px;
        background-size: 15px 15px;
    }

    .my-form *:required {
        background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg);
    }

    .my-form select {
        background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/down.svg);
    }

    .my-form *:disabled {
        cursor: default;
        filter: blur(2px);
    }


    /* FORM BTNS
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
    .my-form .required-msg {
        display: none;
        background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg)
        no-repeat center left / 15px 15px;
        padding-left: 20px;
    }

    .my-form .btn-grid {
        position: relative;
        overflow: hidden;
        transition: filter 0.2s;
    }

    .my-form button {
        font-weight: bold;
    }

    .my-form button > * {
        display: inline-block;
        width: 100%;
        transition: transform 0.4s ease-in-out;
    }

    .my-form button .back {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-110%, -50%);
    }

    .my-form button:enabled:hover .back,
    .my-form button:focus .back {
        transform: translate(-50%, -50%);
    }

    .my-form button:enabled:hover .front,
    .my-form button:focus .front {
        transform: translateX(110%);
    }


    /* CUSTOM CHECKBOX
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
    .my-form input[type="checkbox"] {
        position: absolute;
        left: -9999px;
    }

    .my-form input[type="checkbox"] + label {
        position: relative;
        display: inline-block;
        padding-left: 2rem;
        transition: background 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
    }

    .my-form input[type="checkbox"] + label::before,
    .my-form input[type="checkbox"] + label::after {
        content: '';
        position: absolute;
    }

    .my-form input[type="checkbox"] + label::before {
        left: 0;
        top: 6px;
        width: 18px;
        height: 18px;
        border: 2px solid var(--white);
    }

    .my-form input[type="checkbox"]:checked + label::before {
        background: var(--red);
    }

    .my-form input[type="checkbox"]:checked + label::after {
        left: 7px;
        top: 7px;
        width: 6px;
        height: 14px;
        border-bottom: 2px solid var(--white);
        border-right: 2px solid var(--white);
        transform: rotate(45deg);
    }



    /* MQ
    –––––––––––––––––––––––––––––––––––––––––––––––––– */
    @media screen and (min-width: 600px) {
        .my-form .grid {
            display: grid;
            grid-gap: 1.5rem;
        }

        .my-form .grid-2 {
            grid-template-columns: 1fr 1fr;
        }

        .my-form .grid-3 {
            grid-template-columns: auto auto auto;
            align-items: center;
        }

        .my-form .grid > *:not(:last-child) {
            margin-bottom: 0;
        }

        .my-form .required-msg {
            display: block;
        }
    }

    @media screen and (min-width: 541px) {
        .my-form input[type="checkbox"] + label::before {
            top: 50%;
            transform: translateY(-50%);
        }

        .my-form input[type="checkbox"]:checked + label::after {
            top: 3px;
        }
    }

    .file{
        display: flex;
    }

    .file input{
        display: none;
    }
    .file label{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        line-height: 1.5;
        padding: 15px 10px;
        border: 1px solid var(--borderFormEls);
        color: var(--white);
        background: var(--bgFormEls);
        transition: background-color 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25), transform 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
    }
    .c-i{
        font-size: 1.5rem;
        margin-right: 14px;
    }
</style>


<form class="my-form" action="{{URL::to('/send-mail')}}" enctype="multipart/form-data" method="POST">
    {{csrf_field()}}
    <div class="container">
        <hr/>
        <h1 style="text-align: center">Apply for the post</h1>
        <ul>
            <li>
                <div class="grid grid-1">
                    <input type="text" id="formName" name="name" placeholder="Name" required>
                </div>
            </li>
            <li>
                <div class="grid grid-2">
                    <input type="email" id="formEmail" name="email" placeholder="Email" required>
                    <input type="tel" id="formPhone" name="phone" placeholder="Phone">
                </div>
            </li>
            <li>
                <input type="text" id="subject" name="subject" class="form-control form-control-lg thick" placeholder="Subject" required>
            </li>
            <li>
                <textarea id="formMessage" name="messageQuery" placeholder="Message"></textarea>
            </li>
            <li>
                <div class="grid grid-1">
                    <input type="text" name="portfolioLink" id="portfolioLink" placeholder="Your Portfolio Link" required>
                </div>
            </li>
            <li>
           {{--     <div class="file file-upload">
                    <label for='input-file' style="margin-right: 13.5px">
                        <i class="material-icons c-i">cloud_upload</i>Cover Letter
                    </label>
                    <input id='input-file' id="coverLetter" name="coverLetter" type='file' />
                    <label for='input-file' style="margin-left: 13.5px">
                        <i class="material-icons c-i">cloud_upload</i>CV
                    </label>
                    <input id='input-file' id="cvSend" name="document" type='file' />
                </div>--}}
                <label style="font-size: 1rem; font-weight: 600; margin-bottom: 10px;">Upload CV [*File type- pdf,docx,doc*]</label>
                <input type="file" class="form-control" name="document" placeholder="Upload your CV" required/>
            </li>
            <li>
                <input type="checkbox" id="terms">
                <label for="terms" style="background: none !important;">I have read and agreed with the terms and conditions.</label>
            </li>
            <li>
                <div class="grid grid-3">
                    <div class="required-msg">REQUIRED FIELDS</div>
                    <button class="btn-grid" type="submit" disabled>
                        <span class="back">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/email-icon.svg" alt="">
                        </span>
                        <span class="front">SUBMIT</span>
                    </button>
                    <button class="btn-grid" type="reset" disabled>
                        <span class="back">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/eraser-icon.svg" alt="">
                        </span>
                        <span class="front">RESET</span>
                    </button>
                </div>
            </li>
        </ul>
    </div>
</form>

<script>
    const checkbox = document.querySelector('.my-form input[type="checkbox"]');
    const btns = document.querySelectorAll(".my-form button");

    checkbox.addEventListener("change", function() {
        const checked = this.checked;
        for (const btn of btns) {
            checked ? (btn.disabled = false) : (btn.disabled = true);
        }
    });
</script>