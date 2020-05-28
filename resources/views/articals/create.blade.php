
<html>
       <title>html form</title>
       <body>
           <div class="container">
               <h1>new article</h1>
           <form method="post" action="/articals">
           @csrf
               <table>
                   <tr>
                       <td>title</td>
                      <td>  <input type="text" name="title"> </td>
                   </tr>
                     <tr> 
                         <td>excerpt</td>
                         <td> <input type="textarea" name="excerpt"> </td> 
                    </tr>
                    <tr> 
                          <td>body</td> 
                         <td> <input type="textarea" name="body"> </td> 
                    </tr>
                     <tr> 
                         <td></td>
                         <td> <input type="submit" name="submit" value="submit"> </td>
                    </tr>
               </table>
           </form>
           </div>
       </body>

</html>

