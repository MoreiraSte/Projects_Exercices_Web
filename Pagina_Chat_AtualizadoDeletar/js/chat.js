var input = document.getElementById("msg");
        input.addEventListener("keypress", function (event) {
            if (event.key === "Enter") {
                enviarMSG();
            }
        });
        var Botao = document.getElementById("Botao");
        Botao.addEventListener("click", function () {
            console.log("testebotao")
                enviarMSG();    
        });
        //CONTENT DELIVERY NETWORK - CND
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.4.0/firebase-app.js";
        import { getDatabase, ref, set, push, remove, onValue } from "https://www.gstatic.com/firebasejs/9.4.0/firebase-database.js";

        var firebaseConfig = {
            apiKey: "AIzaSyDAmJlVbWvv_rFg3YDT4g9ITKvJIC95hoY",
            authDomain: "lucianochatpog.firebaseapp.com",
            projectId: "lucianochatpog",
            storageBucket: "lucianochatpog.appspot.com",
            messagingSenderId: "790612766442",
            appId: "1:790612766442:web:f5f2d746e9c9acd34cb193",
            measurementId: "G-MY90D5FW74"
        };

        const botao = document.getElementById("d")
        function removerDB(value){
            console.log(value);
            remove(ref(db, 'exemplo/' + value));
        }
        const app = initializeApp(firebaseConfig);

        var db = getDatabase(app);
        const dbRef = ref(db, 'exemplo');
        const dbSala2 = ref(db, 'sala2');

        var meuhtml = "";
        var key = ""

        var nomeUsuario = prompt("Digite seu nome");
        // var nomeUsuario = "teste"
        onValue(dbRef, (snapshot) => {
            const data = snapshot.val();
            console.log(data);
            meuhtml = "";
            snapshot.forEach(function (childSnapshot) {
                key = childSnapshot.key;    
                 console.log(key);
                 console.log(childSnapshot.val().nome);
                 console.log(childSnapshot.val().hora);
                 console.log(childSnapshot.val().mensagem);

                if(nomeUsuario == "adm"){
                    meuhtml += '<div class="msg"><div class="self"><div class="eu"><b><button id='+ childSnapshot.key +' class="trash">Apagar</button>' + childSnapshot.val().nome + '</i></b><i>' + childSnapshot.val().horario + '</i><span>' + childSnapshot.val().mensagem + '</span></div></div></div>';
                    meuhtml += '<div class="msg"><div class="self"><div class="outros"><b><button id='+ childSnapshot.key +' class="trash2">Apagar</button>' + childSnapshot.val().nome + '</i></b><i>' + childSnapshot.val().horario + '</i><span>' + childSnapshot.val().mensagem + '</span></div></div></div>';
                }
                else{
                    if(nomeUsuario == childSnapshot.val().nome){
                        // meuhtml += '<div class="msg"><div class="self"><div class="eu"><b><div id="d" style="cursor:pointer"><img class="trash" id='+ childSnapshot.key() +' src="img/trash.png" alt=""></div> ' + childSnapshot.val().nome +  '</i></b><i>' + childSnapshot.val().horario + '</i><span>' + childSnapshot.val().mensagem + '</span></div></div></div>';
                        meuhtml += '<div class="msg"><div class="self"><div class="eu"><b><button id='+ childSnapshot.key +' class="trash">Apagar</button>' + childSnapshot.val().nome + '</i></b><i>' + childSnapshot.val().horario + '</i><span>' + childSnapshot.val().mensagem + '</span></div></div></div>';
                        // botao.addEventListener("click", removerDB);
                    } else {
                        meuhtml += '<div class="msg"><div class="conteudo"><div class="outros"><b>' + childSnapshot.val().nome + '</i></b><i>' + childSnapshot.val().horario + '</i><span>' + childSnapshot.val().mensagem + '</span></div></div></div>';
                    }
                }
              
            
            });
            atualizarHTML();

            Array.from(document.querySelectorAll(".trash"), (button) => {
                console.log(button.id)
                button.addEventListener("click", () => {
                    removerDB(button.id);
                })
            })

            Array.from(document.querySelectorAll(".trash2"), (button) => {
                console.log(button.id)
                button.addEventListener("click", () => {
                    removerDB(button.id);
                })
            })
        });

        function enviarMSG() {

            var datahj = new Date();
            var hora = datahj.getHours() + ":" + datahj.getMinutes() + ":" + datahj.getSeconds()
            var teste = document.querySelector("input").value;

            push(ref(db, 'exemplo'), {
                nome: nomeUsuario,
                horario: hora,
                mensagem: teste
            });

            // document.getElementById("msg").value = "";
            document.querySelector("input").value = "";
        }
        
        

        function atualizarHTML() {
            document.getElementById("conteudo").innerHTML += meuhtml
            ajustarScroll();
        }

        function ajustarScroll() {
            console.log("corrirgir scroll");
            var divConteudo = document.getElementById("conteudo");
            divConteudo.scrollTop = divConteudo.scrollHeight;
        }
        