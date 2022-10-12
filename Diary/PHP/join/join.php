<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN -  회원가입</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <div class="login__popup">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/signin_agree_logo.png" alt="">
                <h3>INSERT</h3>
                <div class="login-txt">
                    <p>개인정보를 이곳에 입력해주세요!</p>
                    <p class="fail">모든 정보를 입력해주세요!</p>
                </div>  
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="join" action="joinSave.php" method="post" onsubmit = "return joinChecks()" >
                    <fieldset>
                        <legend class="ir">회원가입을 위한 정보 입력영역</legend>
                        <section class="joinAgree">
                            <div class="name">
                                <label for="youName" class="ir">이름</label>
                                <input type="text" name="youName" id="youName" placeholder="이름" class="input__style" required>
                                <p class="msg" id="youNameComment"><!---* 이름을 작성해주세요.---></p>
                            </div>
                            <div class="Email overlap">
                                <label for="youEmail" class="ir">이메일</label>
                                <input type="email" name="youEmail" id="youEmail" placeholder="이메일" class="input__style" required>
                                <a href="#c" class="check" onclick="emailChecking()">중복 확인</a>
                                <p class="msg" id="youEmailComment"><!--- * 이메일이 존재합니다.---></p>
                            </div>
                            <div class="Pass">
                                <label for="youPass" class="ir">PW</label>
                                <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style" required>
                                <p class="msg" id="youPassComment"><!--- * 비밀번호를 작성해주세요.---></p>
                            </div>
                            <div class="Birth">
                                <label for="youBirth" class="ir">년도 - 월 - 일</label>
                                <input type="text" name="youBirth" id="youBirth" placeholder="년도" class="input__style" required>
                                <p class="msg" id="youBirthComment"><!--- * 올바른 년도를 골라주세요.---></p>
                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <div class="Gender" style="width:30%">
                                    <select name="youGender" id="youGender" class="input__style" required>
                                        <option value="male">남자</option>
                                        <option value="female">여자</option>
                                    </select>
                                    <p class="msg" id="youGenderComment"><!--- * 성별을 설정해주세요---></p>
                                </div>
                                <div class="QA" style="width:65%">
                                    <select name="searchQA" id="searchQA" class="input__style" required>
                                        <option value="QA">나의 보물 1호</option>
                                    </select>
                                    <p class="msg" id="searchQAComment"><!--- * 질문을 설정해주세요.---></p>
                                </div>
                            </div>
                            <div class="youQA">
                                <label for="youQA" class="ir">답변</label>
                                <input type="text" name="youQA" id="youQA" placeholder="나의 보물 1호는?" class="input__style" required>
                                <p class="msg" id="youQAComment"><!--- * 질문에 대한 답변을 작성해주세요.---></p>
                            </div>  
                            <button type="submit" class="input__Btn">완료</button>
                        </section>
                    </fieldset>
                </form>
            </div>
            <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt="닫기버튼 입니다."></button>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        

        let emailCheck = false;
        function emailChecking(){
            let youEmail = $("#youEmail").val();

            if(youEmail == null || youEmail == ''){
                $("#youEmailComment").text("이메일을 입력해주세요 :3")
            }else {
                $.ajax({
                    type : "POST",
                    url : "joinCheck.php",
                    data : {"youEmail" : youEmail, "type" : "emailCheck"},
                    dataType : "json",

                    success : function(data){
                        if(data.result == "good"){
                            $("#youEmailComment").text("사용 가능한 이메일 입니다! :3");
                            emailCheck = true;
                        }else {
                            $("#youEmailComment").text("이미 존재하는 이메일 입니다 ;3");
                            emailCheck = false;
                        }
                    },

                    error : function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                })
            }
        }

        function joinChecks(){
            // 이메일 공백 검사
            if($("#youEmail").val() == ''){
                $("#youEmailComment").text("이메일을 입력해주세요.");
                return false;
            }

            // 이메일 유효성 검사
            let getYouEmail = RegExp(/^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;);
            if(!getYouEmail.test($("#youEmail").val())){
                $("#youEmailComment").text("이메일을 형식에 맞게 작성해주세요.");
                $("#youEmail").val('');
                return false;
            }

            // 이메일 중복 검사
            if(emailCheck == false){
                $("#youEmailComment").text("이메일 중복검사를 해주세요.");
                return false;
            }

            // 비밀번호 공백 검사
            if($("#youPass").val() == ''){
                $("#youPassComment").text("비밀번호를 입력해주세요.");
                return false;
            }

            // 비밀번호 유효성 검사
            let getYouPass = $("#youPass").val();
            let getYouPassNum = getYouPass.search(/[0-9]/g);
            let getYouPassEng = getYouPass.search(/[a-z]/ig);
            let getYouPassSpe = getYouPass.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);

            if(getYouPass.length < 8 || getYouPass.length > 20){
                $("#youPassComment").text("8자리 ~ 20자리 이내로 입력해주세요.");
                return false;
            } else if (getYouPass.search(/\s/) != -1){
                $("#youPassComment").text("비밀번호는 공백 없이 입력해주세요.");
                return false;
            } else if (getYouPassNum < 0 || getYouPassEng < 0 || getYouPassSpe < 0 ){
                $("#youPassComment").text("영문, 숫자, 특수문자를 혼합하여 입력해주세요.");
                return false;
            }


            // 이름 공백 검사
            if($("#youName").val() == ''){
                $("#youPassCComment").text("이름을 입력해주세요.");
                return false;
            }

            // 이름 유효성 검사
            let getYouName = RegExp(/^[가-힣]+$/);
            if(!getYouName.test($("#youName").val())){
                $("#youNameComment").text("이름은 한글만 사용 가능합니다.");
                $("#youName").val('');
                return false;
            }

            // 생년월일 공백 검사
            if($("#youBirth").val() == ''){
                $("#youBirthComment").text("생년월일을 입력해주세요.");
                return false;
            }

            // 생년월일 유효성 검사
            let getYouBirth = RegExp(/^(19[0-9][0-9]|20\d{2})-(0[0-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/);
            if(!getYouBirth.test($("#youBirth").val())){
                $("#youBirthComment").text("올바른 생년월일(YYYY-MM-DD)을 적어주세요.");
                return false;
            }

            // 휴대폰번호 공백 검사
            if($("#youPhone").val() == ''){
                $("#youPhoneComment").text("휴대폰번호를 입력해주세요.");
                return false;
            }

            // 휴대폰번호 유효성 검사
            let getYouPhone = RegExp(/01[016789]-[^0][0-9]{2,3}-[0-9]{3,4}/);
            if(!getYouPhone.test($("#youPhone").val())){
                $("#youPhoneComment").text("휴대폰 번호가 정확하지 않습니다. 올바른 휴대폰번호(000-0000-0000)를 입력해주세요!");
                $("#youPhone").val("");
                return false;
            }

            // 성별 공백 검사
            if($("#youGender").val() == ''){
                $("#youGenderComment").text("성별을 선택해주세요.");
                return false;
            }

            // 질문 공백 검사
            if($("#searchQA").val() == ''){
                $("#searchQAComment").text("성별을 선택해주세요.");
                return false;
            }

            // 답변 공백 검사
            if($("#youQA").val() == ''){
                $("#youQAComment").text("성별을 선택해주세요.");
                return false;
            }
        
        }

    </script>
</body>
</html>