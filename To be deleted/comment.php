<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Section Like Youtube</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f6f6;
        }
        .container1{
            width: 600px;
            border: 2px solid #333;
            padding: 15px 10px;
        }
        .container1 h2{
            text-align: center;
            margin-bottom: 15px;
        }
        textarea{
            height: 20px;
            width: 100%;
            border: none;
            border-bottom: 2px solid #aaa;
            background-color: transparent;
            margin-bottom: 10px;
            resize: none;
            outline: none;
            transition: 1s;
        }

        input[type="submit"], button{
            padding: 10px 15px;
            border: none;
            outline: none;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
        }
        input[type="submit"]{
            color: #fff;
            background-color: #1f4cc7;
        }
        button{
            color: #333;
            background-color: transparent;
        }

        .btn1{
            display: none;
        }
    </style>
</head>
<body>
    
    <div class="container1">
        <h2>Leave us a Comment</h2>
        <form>
            <textarea name="comment" id="comment" placeholder="Add your comment"></textarea>
            <div class="btn1">
                <input type="submit" value="Comment">
                <button id="clear">Cancel</button>
            </div>
        </form>
    </div>


    <script>
        let feild = document.querySelector('textarea');
        let backUp = feild.getAttribute('placeholder');
        let btn1 = document.querySelector('.btn1');
        let clear = document.getElementById('clear');


        feild.onfocus = function(){
            this.setAttribute('placeholder', '');
            this.style.borderColor = '#333';
            btn1.style.display = 'block';
        }

        feild.onblur = function(){
            this.setAttribute('placeholder', backUp);
            this.style.borderColor = "#aaa";
        }
        clear.onclick = function(){
            btn.style.display = 'none';
            feild.value = '';
        }
    </script>
</body>
</html>