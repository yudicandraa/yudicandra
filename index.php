<!DOCTYPE html>

<head>
    <title>
        Yudi Candra
    </title>

</head>

<body>
    <header id="header">
        <a href="https://www.instagram.com/yudi.candraa/" class="Name" id="headername">Yudi Candra</a>
        <div class="toggle">

        </div>
        <ul id="navbar" class="navbar">

            <li><button href="#tentang" onclick="test('#tentang')">Tentang</a></li>
            <li><button href="#portofolio" onclick="test('#portofolio')">Portofolio</a></li>
            <li><button href="#kontak" onclick="test('#contact')">Kontak</a></li>
        </ul>
    </header>
    <section>

        <img src="gunung.png" id="gunung">
        <h2 id="text">Selamat Datang</h2>
        <img src="pohon.png" id="pohon">

        <button id="btn" onclick="test('#tentang')">Mulai</a>

    </section>
    <div class="sec" id="tentang">
        <img src="AW.png" id="fotoprofil">
        <h2>Yudi Candra</h2>
        <p> Saya Yudi Candra, yang biasanya dipanggil dengan yoed atau yudi lahir di Kutacane,
            25 Juli 2001. Saya tinggal di sebuah kota bernama Subulussalam yang terkenal akan
            industri sawitnya. Hobi rutin saya adalah bermain game. Sejak SMA saya udah sangat
            bercita - cita ingin kuliah. Alhamdulillah saya lulus
            di salah satu kampus negeri di Aceh yaitu Universitas Syiah Kuala pada Program Studi Teknik Komputer. Selama
            Kuliah saya aktif berorganisasi program studi yaitu Himpunan Mahasiswa
            Teknik Komputer (HIMATEKKOM) sebagai Wakil Ketua Divisi Informasi dan Komunikasi
            periode 2021. Tujuan saya ikut berorganisasi adalah selain melatih softskill dan leadship, juga
            sebagai ajang untuk berbagi ilmu yang sudah saya dapatkan dan sudah saya terapkan.
            Selain aktif di Himpunan saya merupakan anggota dari Kementrian Komunikasi dan
            Informasi (KOMINFO) pada Badan Eksekutif Mahasiswa Fakultas Teknik periode 2021.
            Selain itu saya mengikuti salah satu UKM seni di fakultas yaitu Wadah Aspirasi dan
            Apresiasi Seni Aneuk Teknik (WASIAT) guna mengasah bakat saya di bidang seni.<br><br>
        </p>
        <p> Saya memiliki beberapa keahlian diantaranya bidang desain grafis maupun desain
            UI/UX hal ini diperkuat dengan salah satu mata kuliah yang saya ambil ketika
            semester 4 yaitu Interaksi Manusia dan Komputer. Kemudian saya juga bisa beberapa
            bahasa pemograman seperti Python, Java, C, dan lain - lain. Selain itu saya juga
            bisa membuat aplikasi mobile sederhana menggunakan Flutter dan Kivy, salah satu
            contoh aplikasi mobile yang pernah saya kembangkan adalah Aplikasi Faraidh: Sistem
            Penghitung Harta Warisan Mobile.</p>


    </div>
    <div class="contain" id="portofolio">
        <svg id="glb1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#142B3B" fill-opacity="1"
                d="M0,256L48,240C96,224,192,192,288,197.3C384,203,480,245,576,261.3C672,277,768,267,864,250.7C960,235,1056,213,1152,202.7C1248,192,1344,192,1392,192L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <h2>Portofolio</h2>
        <h3>Logo</h3>
        <div align="center;" class="social">
            <img src="logo.jpg" id="dikitabisa" width="200" height="200" />
        </div>
        <div align="center;" class="social">
            <img src="logo2.jpeg" id="biner" width="200" height="200" />
        </div>
        <div align="center;" class="social">
            <img src="logo3.png" id="rca" width="200" height="200" />
        </div>

        <h3 id="poster">Poster</h3>
        <div align="center;" class="social">
            <img id="image1" src="banner1.png" width="200" height="300" />
        </div>
        <div align="center;" class="social">
            <img id="image1" src="Banner2.png" width="200" height="300" />
        </div>
        <div align="center;" class="social">
            <img id="image1" src="banner3.png" width="200" height="300" />
        </div>

        <svg id="glb2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#142B3B" fill-opacity="1"
                d="M0,224L48,234.7C96,245,192,267,288,261.3C384,256,480,224,576,186.7C672,149,768,107,864,122.7C960,139,1056,213,1152,245.3C1248,277,1344,267,1392,261.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>

    <div class="contactme" id="contact">

        <h2>Kontak Saya</h2>
        <div class="contact">

            <form action="#">
                <div class="form-row" id="test1">
                    <div class="input-data">
                        <input type="text">
                        <label for="">Nama Depan</label>
                    </div>


                    <div class="input-data">
                        <input type="text">
                        <label for="">Nama Belakang</label>
                    </div>
                </div>

                <div class="form-row">
                    <div class="input-data">
                        <input type="text">
                        <label for="">Email</label>
                    </div>
                </div>


                <div class="form-row text-area">
                    <div class="input-data">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        <label for="">Pesan</label>
                    </div>
                </div>

                <div class="form-row submit">
                    <div class="input-data">
                        <div class="inner">
                            <input id="submit" type="Submit" value="Submit">
                        </div>
                    </div>
                </div>


            </form>


        </div>

    </div>

    <div class="footer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#142B3B" fill-opacity="1"
                d="M0,256L48,245.3C96,235,192,213,288,202.7C384,192,480,192,576,192C672,192,768,192,864,181.3C960,171,1056,149,1152,154.7C1248,160,1344,192,1392,208L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <h3>Create with love by Yudi Candra</h3>
        <ul id="#" class="footer">

            <li><a href="www.instagram.com/yudi.candraa/"><img src="instagram.svg" width="30px"></a>
            </li>
            <li><a href="www.facebook.com/yudicand25"><img src="facebook.svg" width="30px"></a></li>
            <li><a href="yudicandraa4.0@gmail.com"><img src="gmail.svg" width="35px"></a></li>
        </ul>


    </div>


    <script>
    let gunung = document.getElementById('gunung');
    let text = document.getElementById('text');
    let button = document.getElementById('btn');
    const toggleMenu = document.querySelector('.toggle');
    const navBar = document.querySelector('.navbar');
    toggleMenu.onclick = function() {
        toggleMenu.classList.toggle('active');
        navBar.classList.toggle('active');
    }



    window.addEventListener('scroll', function() {
        let value = window.scrollY;
        gunung.style.top = value * 0.5 + 'px';
        text.style.marginTop = value * 1.5 + 'px';
        button.style.marginTop = value * 1.5 + 'px';
    })

    function test(url) {
        window.location = url;

    }
    </script>
</body>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    scroll-behavior: smooth;
}

body {
    min-height: 100vh;
    background: linear-gradient(#D6D66F, #ffffff);
}

header {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 30px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 1000;
}

header .Name {

    margin-left: -30px;
    color: #fff;
    font-weight: 700;
    text-decoration: none;
    font-size: 1.4em;
    text-transform: uppercase;
    letter-spacing: 1px;
}

header ul {
    display: flex;
    justify-content: center;
    align-items: center;
}

header ul li {
    list-style: none;
    margin-left: 40px;

}

header ul li button {
    font-weight: 400;

    width: 70px;
    height: 30px;
    border: none;
    background: none;
    text-decoration: none;
    padding: 5px 5px;
    color: #fff;
    border-radius: 18px;
}

header ul li button:hover {
    background: #fff;
    color: #1C3B4A;
}

section {
    position: relative;
    height: 100vh;
    width: 100%;
    padding: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;


}

section::before {
    content: '';
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 20px;
    background: linear-gradient(to top, #142B3B, transparent);
    z-index: 1000;
}

section img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    pointer-events: none;
}

section img#pohon {
    z-index: 10;
}

#text {
    position: absolute;
    color: #142C3C;
    white-space: nowrap;
    font-size: 3.5vw;
    z-index: 9;

}

#btn {
    font-weight: 600;
    border: none;
    background: #fff;
    text-decoration: none;
    padding: 8px 30px;
    border-radius: 40px;

    color: #1C3B4A;
    display: inline-block;
    z-index: 9;
    transform: translateY(100px);
}


.sec {
    position: relative;
    padding: 70px;
    background: #142B3B;
}

.sec img {
    margin-top: -40px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    height: 200px;
    width: 200px;
}

.sec h2 {
    text-align: center;
    display: block;
    margin-left: auto;
    margin-right: auto;
    padding-top: -70px;
    font-size: 2.5em;
    margin-bottom: 15px;
    color: #fff;
}

.sec p {
    font-size: 1.2em;
    color: #fff;
    text-indent: 50px;
    text-align: justify;
    text-justify: inter-word;
}

.contain {
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: -10px;
    text-align: center;
    background: #fff;
}

.social {
    display: inline-block;
    padding: 10px;

}

.contain h2 {
    text-align: center;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: -175px;
    font-size: 2.5em;
    color: #fff;
}

.contain h3 {
    text-align: center;
    display: block;
    margin-left: auto;
    margin-right: auto;
    padding-top: -70px;
    font-size: 1.5em;
    margin-bottom: 15px;
    color: #fff;
}

#poster {
    color: #142B3B;
}

#dikitabisa {
    border-radius: 30px;
}

#biner {
    border-radius: 30px;
}

#rca {
    border-radius: 30px;
}

.contactme {
    padding-top: 90px;
    margin-top: -50px;
    padding-bottom: -100px;
    width: 100%;
    background-color: #142B3B;
}

.contactme h2 {
    text-align: center;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: -20px;
    font-size: 2.5em;
    color: #fff;
    margin-bottom: 20px;
}

.contact {
    border-radius: 18px;
    background: #fff;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 800px;
    max-width: 800px;
    padding: 25px 40px 10px 40px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
}

.contact form {
    padding: 30px 0 0 0 0;

}

.contact form .form-row {
    display: flex;
    margin: 32px 0;
}

.contact form .form-row .input-data {
    width: 100%;
    height: 40px;
    margin: 0 20px;
    position: relative;
}

.contact form .form-row .text-area {
    height: 70px;
}

.input-data input,
.text-area textarea {
    display: block;
    height: 100%;
    width: 100%;
    border: None;
    font-size: 17px;
    border-bottom: 2px solid rgba(0, 0, 0, 0.12);
    outline: none;
}



.text-area textarea {
    resize: none;
    padding-top: 10px;
}

.input-data input:focus~label,
.text-area textarea:focus~label,
.input-data input:valid~label,
.text-area textarea:valid~label {
    transform: translateY(-20px);
    color: #1D485E;
    font-size: 14px;
    transition: all 0.1s ease-in;
}

.input-data input:focus-visible~label,
.text-area textarea:focus-visible~label {
    margin-bottom: 5px;
    font-size: 10px;
}

.input-data label {
    position: absolute;
    bottom: 10px;
    font-size: 14px;
    color: #060607;
    background: #fff;
    pointer-events: none;
}

.text-area label {
    position: absolute;
    bottom: 10px;
    font-size: 14px;
    color: #060607;
    background: #fff;
    pointer-events: none;
}

#submit {
    max-width: 150px;
    height: 40px;
    font-weight: 600;
    display: block;
    margin-left: auto;
    margin-right: auto;
    border: none;
    background: #fff;
    text-decoration: none;

    border-radius: 40px;
    background-color: #1C3B4A;
    color: #FFF;


}

#glb1 {
    margin-top: -150px;
}

#glb2 {
    margin-top: -120px;
    margin-bottom: -10px;
}

.contact h2 {
    display: block;
    margin-left: auto;
    margin-right: auto;
    color: #1C3B4A;
    text-align: center;

}

.footer {
    background-color: #fff;

}

.footer h3 {
    margin-top: -50px;
    font-size: 14px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    color: #1C3B4A;
    text-align: center;
}

.footer ul {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 30px;
    margin-top: -10px;
}

.footer ul li {
    list-style: none;


}

.footer ul li button {
    font-weight: 400;

    width: 70px;
    height: 30px;
    border: none;
    background: none;
    text-decoration: none;
    padding: 10px 10px;
    color: #142B3B;
    border-radius: 18px;
}

@media (max-width: 992px) {
    #header {
        padding: 20px;
    }

    header .Name {
        padding-left: 20px;
        font-size: 0.9em;
    }

    .navbar {
        display: none;
    }

    .navbar.active {
        position: fixed;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        top: 0;
        left: 0;
        display: flex;
        width: 100%;
        height: 100vh;
        background-color: #142B3B;
    }

    .toggle {
        position: relative;
        width: 30px;
        height: 30px;
        cursor: pointer;
        background: url(list.svg);
        fill: white;
        background-size: 19px;
        background-position: center;
        background-repeat: no-repeat;
        z-index: 1000;

    }

    .toggle.active {
        position: fixed;
        top: 20px;
        right: 20px;
        background: url(delete.svg);
        background-size: 19px;
        fill: white;
        background-position: center;
        background-repeat: no-repeat;
    }

    #text {
        font-size: 30px;
        margin-top: -100px;
    }

    .sec {

        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 50px;
        padding-top: 50px;
    }

    .sec img {
        margin-top: -40px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        height: 150px;
        width: 150px;
    }

    .sec h2 {
        text-align: center;
        display: block;
        margin-left: auto;
        margin-right: auto;

        font-size: 1.5em;

        color: #fff;
    }

    .sec p {
        font-size: 0.8em;
        color: #fff;
        text-indent: 50px;
        text-align: justify;
        text-justify: inter-word;
    }

    .contain img {
        width: 150px;
        height: 150px;
    }

    #image1 {
        width: 150px;
        height: 200px;
    }

    .contain {
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: -10px;
        text-align: center;
        background: #fff;
    }

    .social {
        display: inline-block;
        padding: 10px;

    }

    .contain h2 {
        text-align: center;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: -78px;
        font-size: 1.5em;
        color: #fff;
    }

    .contain h3 {
        text-align: center;
        display: block;
        margin-left: auto;
        margin-right: auto;
        padding-top: -10px;
        font-size: 1.0em;
        margin-bottom: 15px;
        color: #fff;
    }

    #poster {
        color: #142B3B;
    }

    #dikitabisa {
        border-radius: 30px;
    }

    #biner {
        border-radius: 30px;
    }

    #rca {
        border-radius: 30px;
    }

    #glb1 {
        margin-top: 0px;
    }

    #glb2 {
        margin-top: 0px;
        margin-bottom: 0px;
    }



    .contactme {
        padding-top: 90px;
        margin-top: -10px;
        padding-bottom: -100px;
        width: 100%;
        background-color: #142B3B;
    }

    .contactme h2 {
        text-align: center;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: -50px;
        font-size: 1.5em;
        color: #fff;
        margin-bottom: 20px;
    }

    .contact {
        border-radius: 18px;
        background: #fff;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 250px;
        max-width: 250px;

        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }



    .contact form .form-row {
        display: flex;
        margin: 5px 0;
    }

    .contact form .form-row .input-data {
        width: 100%;
        height: 40px;
        position: relative;
    }

    .contact form .form-row .text-area {
        height: 80px;
    }

    .input-data input,
    .text-area textarea {
        display: block;
        height: 100%;
        width: 150%;
        margin-left: -30px;
        border: None;
        font-size: 10px;
        border-bottom: 2px solid rgba(0, 0, 0, 0.12);
        outline: none;
    }

    #test1 {
        width: 120%;
    }

    .text-area textarea {
        resize: none;
        padding-top: 10px;
    }

    .input-data input:focus~label,
    .text-area textarea:focus~label,
    .input-data input:valid~label,
    .text-area textarea:valid~label {
        transform: translateY(-18px);
        color: #1D485E;
        font-size: 10px;
        transition: all 0.1s ease-in;
    }

    .input-data input:focus-visible~label,
    .text-area textarea:focus-visible~label {
        margin-bottom: 5px;
        font-size: 10px;
    }

    .input-data label {
        position: absolute;
        bottom: 8px;
        font-size: 8px;
        color: #060607;
        background: #fff;
        pointer-events: none;
        margin-left: -30px;
    }

    .text-area label {
        margin-left: -30px;
        position: absolute;
        bottom: 8px;
        font-size: 8px;
        color: #060607;
        background: #fff;
        pointer-events: none;
    }

    #submit {
        max-width: 100px;
        height: 30px;
        font-weight: 600;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border: none;
        background: #fff;
        text-decoration: none;
        margin-top: 10px;
        border-radius: 40px;
        background-color: #1C3B4A;
        color: #FFF;


    }


    .footer {
        background-color: #fff;

    }

    .footer h3 {
        margin-top: -20px;
        font-size: 14px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        color: #1C3B4A;
        text-align: center;
    }

    .footer ul {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 30px;
        margin-top: -10px;
    }

    .footer ul li {
        list-style: none;


    }

    .footer ul li button {
        font-weight: 400;

        width: 70px;
        height: 30px;
        border: none;
        background: none;
        text-decoration: none;
        padding: 10px 10px;
        color: #142B3B;
        border-radius: 18px;
    }

}
</style>

</html>