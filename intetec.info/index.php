<?xml version="1.0" encoding="utf-8"?>
<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
  xmlns:http="http://www.w3.org/2011/http#"
  xmlns:cnt="http://www.w3.org/2011/content#"
  xmlns:dct="http://purl.org/dc/terms/">

  <http:Connection rdf:ID="conn">
    <http:connectionAuthority>http://localhost/host/intetec.info/</http:connectionAuthority>
    <http:requests rdf:parseType="Collection">
      <http:Request rdf:about="#req0"/>
      <http:Request rdf:about="#req1"/>
    </http:requests>
  </http:Connection>

  <http:Request rdf:about="#req0">
    <http:httpVersion>1.1</http:httpVersion>
    <http:methodName>GET</http:methodName>
    <http:mthd rdf:resource="http://www.w3.org/2011/http-methods#GET"/>
    <http:absolutePath>/</http:absolutePath>
    <http:headers rdf:parseType="Collection">
      <http:RequestHeader>
        <http:fieldName>Host</http:fieldName>
        <http:hdrName rdf:resource="http://www.w3.org/2011/http-headers#host"/>
        <http:fieldValue>www.example.org</http:fieldValue>
      </http:RequestHeader>
      <http:RequestHeader>
        <http:fieldName>User-Agent</http:fieldName>
        <http:hdrName rdf:resource="http://www.w3.org/2011/http-headers#user-agent"/>
        <http:fieldValue>My User Agent</http:fieldValue>
      </http:RequestHeader>
      <http:RequestHeader>
        <http:fieldName>Accept</http:fieldName>
        <http:hdrName rdf:resource="http://www.w3.org/2011/http-headers#accept"/>
        <http:fieldValue>text/html, image/png, image/gif;q=0.8</http:fieldValue>
        <http:headerElements rdf:parseType="Collection">
          <http:HeaderElement>
            <http:elementName>text/html</http:elementName>
          </http:HeaderElement>
          <http:HeaderElement>
            <http:elementName>image/png</http:elementName>
          </http:HeaderElement>
          <http:HeaderElement>
            <http:elementName>image/gif</http:elementName>
            <http:params rdf:parseType="Collection">
              <http:Parameter>
                <http:paramName>q</http:paramName>
                <http:paramValue>0.8</http:paramValue>
              </http:Parameter>
            </http:params>
          </http:HeaderElement>
        </http:headerElements>
      </http:RequestHeader>
    </http:headers>
    <http:resp rdf:resource="#resp0"/>
  </http:Request>

  <http:Request rdf:about="#req1">
    <http:httpVersion>1.1</http:httpVersion>
    <http:methodName>GET</http:methodName>
    <http:mthd rdf:resource="http://www.w3.org/2011/http-methods#GET"/>
    <http:absolutePath>/image</http:absolutePath>
    <http:headers rdf:parseType="Collection">
      <http:RequestHeader>
        <http:fieldName>Host</http:fieldName>
        <http:hdrName rdf:resource="http://www.w3.org/2011/http-headers#host"/>
        <http:fieldValue>www.example.org</http:fieldValue>
      </http:RequestHeader>
      <http:RequestHeader>
        <http:fieldName>User-Agent</http:fieldName>
        <http:hdrName rdf:resource="http://www.w3.org/2011/http-headers#user-agent"/>
        <http:fieldValue>My User Agent</http:fieldValue>
      </http:RequestHeader>
      <http:RequestHeader>
        <http:fieldName>Accept</http:fieldName>
        <http:hdrName rdf:resource="http://www.w3.org/2011/http-headers#accept"/>
        <http:fieldValue>image/png, image/gif;q=0.8</http:fieldValue>
        <http:headerElements rdf:parseType="Collection">
          <http:HeaderElement>
            <http:elementName>image/png</http:elementName>
          </http:HeaderElement>
          <http:HeaderElement>
            <http:elementName>image/gif</http:elementName>
            <http:params rdf:parseType="Collection">
              <http:Parameter>
                <http:paramName>q</http:paramName>
                <http:paramValue>0.8</http:paramValue>
              </http:Parameter>
            </http:params>
          </http:HeaderElement>
        </http:headerElements>
      </http:RequestHeader>
    </http:headers>
    <http:resp rdf:resource="#resp1"/>
  </http:Request>

  <http:Response rdf:ID="resp0">
    <http:httpVersion>1.1</http:httpVersion>
    <http:statusCodeValue>200</http:statusCodeValue>
    <http:sc rdf:resource="http://www.w3.org/2011/http-statusCodes#OK"/>
    <http:reasonPhrase>OK</http:reasonPhrase>
    <http:headers rdf:parseType="Collection">
      <http:GeneralHeader>
        <http:fieldName>Date</http:fieldName>
        <http:hdrName rdf:resource="http://www.w3.org/2011/http-headers#date"/>
        <http:fieldValue>.......</http:fieldValue>
      </http:GeneralHeader>
      <http:EntityHeader>
        <http:fieldName>Content-Type</http:fieldName>
        <http:hdrName rdf:resource="http://www.w3.org/2011/http-headers#content-type"/>
        <http:fieldValue>text/html; charset=utf-8</http:fieldValue>
        <http:headerElements rdf:parseType="Collection">
          <http:HeaderElement>
            <http:elementName>text/html</http:elementName>
            <http:params rdf:parseType="Collection">
              <http:Parameter>
                <http:paramName>charset</http:paramName>
                <http:paramValue>utf-8</http:paramValue>
              </http:Parameter>
            </http:params>
          </http:HeaderElement>
        </http:headerElements>
      </http:EntityHeader>
    </http:headers>
    <http:body>
      <cnt:ContentAsBase64 rdf:ID="cont0-bin">
        <cnt:bytes rdf:datatype="http://www.w3.org/2001/XMLSchema#base64Binary">ajrq9qguojbglj48z..........</cnt:bytes>
        <dct:isFormatOf rdf:resource="http://www.example.org/"/>
      </cnt:ContentAsBase64>
    </http:body>
  </http:Response>

  <http:Response rdf:ID="resp1">
    <http:httpVersion>1.1</http:httpVersion>
    <http:statusCodeValue>200</http:statusCodeValue>
    <http:sc rdf:resource="http://www.w3.org/2011/http-statusCodes#OK"/>
    <http:reasonPhrase>OK</http:reasonPhrase>
    <http:headers rdf:parseType="Collection">
      <http:MessageHeader>
        <http:fieldName>Date</http:fieldName>
        <http:hdrName rdf:resource="http://www.w3.org/2011/http-headers#date"/>
        <http:fieldValue>.......</http:fieldValue>
      </http:MessageHeader>
      <http:MessageHeader>
        <http:fieldName>Content-Type</http:fieldName>
        <http:hdrName rdf:resource="http://www.w3.org/2011/http-headers#content-type"/>
        <http:fieldValue>image/png</http:fieldValue>
      </http:MessageHeader>
      <http:MessageHeader>
        <http:fieldName>Vary</http:fieldName>
        <http:hdrName rdf:resource="http://www.w3.org/2011/http-headers#vary"/>
        <http:fieldValue>accept</http:fieldValue>
        <http:headerElements rdf:parseType="Collection">
          <http:HeaderElement>
            <http:elementName>accept</http:elementName>
          </http:HeaderElement>
        </http:headerElements>
      </http:MessageHeader>
    </http:headers>
    <http:body>
      <cnt:ContentAsBase64>
        <cnt:bytes rdf:datatype="http://www.w3.org/2001/XMLSchema#base64Binary">qouh3908t38hohfrf..........</cnt:bytes>
        <dct:isFormatOf rdf:resource="http://www.example.org/image"/>
      </cnt:ContentAsBase64>
    </http:body>
  </http:Response>

</rdf:RDF>

<?xml version="1.0"?>
 <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
 xmlns:s="http://www.schemas.org/Course/"
 xmlns:dc="http://purl.org/dc/elements/1.1/">
 <rdf:Description about="http://www.cs.vassar.edu/courses/cs240">
 <s:homeworks>
 <rdf:Bag ID="pages">
 <rdf:li rdf:resource="http://www.cs. vassar.edu/courses/cs240/hw1.html">
 <rdf:li rdf:resource="http://www.cs. vassar.edu/courses/cs240/hw2.html">
 </rdf:Bag>
 </s:homeworks>
 </rdf:Description>
 <rdf:Description about="#pages">
 <dc:creator>Nancy Ide</dc:creator>
 </rdf:Description>
 </rdf:RDF> 

< NACM  xmlns = " urn: IETF: Parâmetros: xml: ns: Yang:-IETF-Netconf acm " >
  < Grupos >
    < Grupo >
      < Nome > admin </ nome >
      < Nome de usuário > admin </ user-name >
      < Nome de usuário > andy </ user-name >
    </ Grupo >

    < Grupo >
      < Nome > limitado </ nome >
      < Nome de usuário > wilma </ user-name >
      < Nome de usuário > bam-bam </ user-name >
    </ Grupo >

    < Grupo >
      < Nome > convidado </ nome >
      < Nome de usuário > convidado </ user-name >
      < Nome de usuário > guest@example.com </ user-name >
    </ Grupo >
  </ Grupos >
</ NACM >
 
################################################## #############
#
# TLD: .author
# Script: Português
Tag # Idioma: pt
# Número de versão: 1.0
# Data de Vigência: 01 de outubro de 2013
# Registro: Amazon Serviços de Registro, Inc.
# Endereço: 410 Terry Avenue N., Seattle, WA 98109 EUA
# Telefone: + 1 206 266 1000
# Email: amazon@valideus.com
# URL:            
#
################################################## #############
Versão 1 20130101 
01 de outubro de 2013
Referência 1 Diretrizes da ICANN para a Implementação de Nomes de Domínio Internacionalizados
################################################## ##############
# Relevante URL Política de Documento: 
# Este documento descreve a nomes de domínio internacionalizados de mesa (IDN) de caracteres usado pelo Amazon Serviços de Registro, Inc. dentro do registro .author para o registro de domínios .author no idioma Português. 
# Aconselhamos registando a considerar cuidadosamente a confusão potencial sobre a percepção de equivalência entre um caráter Latin acentuada e outra sequência de caracteres latinos (com ou 
# Sem acentos). Não existe nenhuma regra de equivalência que pode ser aplicado universalmente como quaisquer mapeamentos são geralmente dependentes da língua, a cultura eo contexto em que um IDN é usado. 
# A tabela é uma adaptação do formato de tabela RFC 3743 da. O formato é o seguinte:
# POINT código válido
# A primeira coluna é válido ponto de código que está disponível para registro.
# A segunda coluna está vazia para este idioma.
# A terceira coluna está vazia para este idioma.
# Esta tabela está em conformidade com as Diretrizes da ICANN para a Implementação de Nomes de Domínio Internacionalizados e destinado a publicação no Registro Tabela de Caracteres IANA IDN.
#
U + 002D # hífen-menos (-)
U + 0030 # dígito zero (0)
U + 0031 ONE # dígitos (1)
U + 0032 # dígito Dois (2)
U + 0033 # três dígitos (3)
U + 0034 # quatro dígitos (4)
U + 0035 # cinco dígitos (5)
U + 0036 # DIGIT SEIS (6)
U + 0037 # DIGIT sete (7)
U + 0038 # DIGIT OITO (8)
U + 0039 # DIGIT nove (9)
U + 0061 # LATIN LETRA PEQUENA A (a)
U + 0062 # LATIN LETRA PEQUENA B (b)
U + 0063 # LATIN LETRA PEQUENA C (c)
U + 0064 # LATIN LETRA PEQUENA D (d)
U + 0065 # LATIN LETRA PEQUENA E (e)
U + 0066 # a minúsculo F (f)
U + 0067 # LATIN PEQUENA letra g (g)
U + 0068 # LATIN LETRA PEQUENA H (h)
U + 0069 # LATIN LETRA PEQUENA I (i)
U + 006A # LATIN PEQUENA letra J (j)
U + 006B # LATIN letra pequena K (k)
U + 006C # LATIN LETRA PEQUENA L (l)
U + 006D # LATIN LETRA PEQUENA M (m)
U + 006E # LATIN LETRA PEQUENA N (n)
U + 006F # LATIN LETRA PEQUENA O (o)
U + 0070 # LATIN LETRA PEQUENA P (p)
U + 0071 # LATIN letra pequena Q (q)
U + 0072 # LATIN PEQUENA LETRA R (r)
U + 0073 # LATIN LETRA PEQUENA S (s)
U + 0074 # LATIN T LETRA PEQUENA (t)
U + 0075 # LATIN PEQUENA letra U (u)
U + 0076 # LATIN LETRA PEQUENA V (v)
U + 0077 # LATIN LETRA PEQUENA W (w)
U + 0078 # LATIN LETRA PEQUENA X (x)
U + 0079 # a minúsculo Y (y)
U + 007A # LATIN Z Letra pequena (z)
U + 00E0 # LATIN minúsculo com GRAVE (à)
U + 00E1 # LATIN LETRA PEQUENA A COM aguda (á)
U + 00E2 # a minúsculo com acento circunflexo (A)
U + 00E3 # LATIN LETRA PEQUENA A com til (ã)
U + 00E7 # LATIN PEQUENA LETRA C COM cedilha (ç)
U + 00E9 # a minúsculo E com acento agudo (é)
U + 00EA # a minúsculo E com acento circunflexo (E)
U + 00ED # LATIN LETRA PEQUENA I COM aguda (I)
U + 00F3 # LATIN LETRA PEQUENA O COM aguda (o)
U + 00F4 # LATIN PEQUENA LETRA O com acento circunflexo (ô)
U + 00F5 # LATIN PEQUENA LETRA O com til (O)
U + 00FA # LATIN PEQUENA letra U com acento agudo (U)
U + 00FC # LATIN letra pequena u com trema (ü)

módulo de teste-patch {
  yang-versão  1.1 ;
  namespace  "urn: IETF: Parâmetros: xml: ns: Yang: test-remendo" ;
  prefixo  "typatch" ;

  importar IETF-yang-patch { prefixo yp; }

  revisão  2016 - 03 - 13 ;

  recipiente superior {
    configuração  falsa ;
    usa yp: yang-patch;
    usa yp: yang-patch-status;
  }

}
https://www.rfc-editor.org/rfc/rfc1428.txt
"http://schemas.xmlsoap.org/soap/encoding/"
"http://my.host/encoding/restricted http://my.host/encoding/"
POST /StockQuote HTTP/1.1
Host: www.stockquoteserver.com
Content-Type: text/xml; charset="utf-8"
Content-Length: nnnn
SOAPAction: "Some-URI"

<SOAP-ENV:Envelope
  xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
  SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
   <SOAP-ENV:Body>
       <m:GetLastTradePrice xmlns:m="Some-URI">
           <symbol>DIS</symbol>
       </m:GetLastTradePrice>
   </SOAP-ENV:Body>
</SOAP-ENV:Envelope>