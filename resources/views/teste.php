<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form id="form">
    <input type="text" name="title" value="Erik's bar">
    <input type="text" name="content" value="Melhor Wiski da região">
    <input type="file" name="thumb" id="file">
</form>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">

    $('#file').on('change', function () {

        let formData = new FormData();
        formData.append('title', 'Erik\'s bar');
        formData.append('content', 'Melhor Wiski da região');
        formData.append('thumb', $('#file')[0].files[0]);

        let headers = {
            'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjVjMGJlMGJmNDZmYTNiZmYwMGY2MDE2NjE3MDMwMjYwZDc5ZTY4ZmU5N2YyMDhmZjkzOWRjODQ1NjNiNGQ4OTg1MmMwMmZkOTI5ZjAxZjYwIn0.eyJhdWQiOiI1IiwianRpIjoiNWMwYmUwYmY0NmZhM2JmZjAwZjYwMTY2MTcwMzAyNjBkNzllNjhmZTk3ZjIwOGZmOTM5ZGM4NDU2M2I0ZDg5ODUyYzAyZmQ5MjlmMDFmNjAiLCJpYXQiOjE1NDk5Njc4MDIsIm5iZiI6MTU0OTk2NzgwMiwiZXhwIjoxNTgxNTAzODAyLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.TrebHRI4l6r7ZHJCrne5rTU69ND9iYhU6ePafHL-7ES1YdKyjFQmJlvkCDmsqGs4Nt3NOAbxwChcMJMFW7A53PKycR2jv1wynsWN10hpBSzfq_vFgcdCq1mW8ga068LtFlDl0PEOabJvvbxoreIj1jPOXYoomPbEXXw1rjzmynsSowAhVH4-6kjQQ8W7heNrG7M6noaVi59VvGko848vkJI6Oe_-88_skp6Ho9Tjeq-a1wgcSiumnA3ozL0m1LeOTipudBWwqMordcSFU7Vlv3n6byk2tHAzhJt505rIfHQ6_EkyJbSXvN0bNKL2ViBs__I8SD83ALuB6K78Vyi55v6Hf84xOkewYXHS7bJDBnITd08EzaKb6T1B8ZAYNM_hfTt2Q4VkaOxbcMMyyKGSEs0ZqduUs2I-_oEU04HPUV8DCqVR-rU2qFIn8IDbeIeY4QTacYjLtLvGdzaAwSv7OwCZtV2eAV6tQv_Zx2C5Xtv5_7niov9bbK0tKj8gj9z00SAcgHAFsPrKp5EeGecAmdbu_kMNkYyDEqXheZtP_czngOpk0kABPRLL-UD4qB78nlK79fUaRWKruWBaduMYPitH3qj1hiPBx6eKLrBJEExnJSaSITsNMPSI7eq5xYsSRxOZGkv33nWJu-Hx7JbjkOuRUX91UyUrkk9LiMyXJD8',
            //'content-type': 'multipart/form-data'
            'content-type': 'application/x-www-form-urlencoded'
        }

        axios.post('http://localhost:8000/api/v1/noticias/1', formData, {headers: headers})
    })
</script>
</body>
</html>