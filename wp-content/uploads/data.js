var botName = "Admin",
botAvatar = "",
conversationData = {"homepage": {1: { "statement": [ 
"¡Hola! Mi nombre es Admin, soy el dueño de este sitio y me gustaría ser tu asistente aquí.", 
"Tengo solo un par de preguntas.", 
"¿Cómo te llamas?", 
], "input": {"name": "name", "consequence": 1.2}},1.2:{"statement": function(context) {return [ 
"Nice to meet you here, " + context.name  + "!", 
"Como puedes ver, nuestra web se lanzará muy pronto.", 
"Lo se, estás muy emocionado para verlo, pero necesitamos unos días más para terminarlo.", 
"¿Te gustaría ser el primero en verlo?", 
];},"options": [{ "choice": "Dime más","consequence": 1.4},{ 
"choice": "Aburrido","consequence": 1.5}]},1.4: { "statement": [ 
"¡Guay! Por favor deja tu correo electrónico aquí y te enviaré un mensaje cuando esté listo.", 
], "email": {"email": "email", "consequence": 1.6}},1.5: {"statement": function(context) {return [ 
"Lamento escuchar eso, " + context.name  + " :( Nos vemos la próxima vez.", 
];}},1.6: { "statement": [ 
"¡Recibido! ¡Gracias y te vemos pronto aquí!", 
"¡Que tengas un buen día!", 
]}}};