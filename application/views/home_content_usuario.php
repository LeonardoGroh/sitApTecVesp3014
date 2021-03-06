<!-- Content -->
<div id="content">
    <div class="inner">

        <!-- Post -->
        <article class="box post post-excerpt">
            <header>
                <!--
                        Note: Titles and subtitles will wrap automatically when necessary, so don't worry
                        if they get too long. You can also remove the <p> entirely if you don't
                        need a subtitle.
                -->
                <h2><a href="pessoas">Cadastro de usuário</a></h2>
                <!--<p>A free, fully responsive HTML5 site template by HTML5 UP</p>-->
            </header>
            <div class="info">
                <!--
                        Note: The date should be formatted exactly as it's shown below. In particular, the
                        "least significant" characters of the month should be encapsulated in a <span>
                        element to denote what gets dropped in 1200px mode (eg. the "uary" in "January").
                        Oh, and if you don't need a date for a particular page or post you can simply delete
                        the entire "date" element.
                        
                -->
                <span class="date"><span class="month">Jul<span>y</span></span> <span class="day">14</span><span class="year">, 2014</span></span>
                <!--
                        Note: You can change the number of list items in "stats" to whatever you want.
                -->
                <!--                <ul class="stats">
                                    
                <li><a href="#" class="icon fa-comment">16</a></li>
                                    <li><a href="#" class="icon fa-heart">32</a></li>
                                    <li><a href="#" class="icon fa-twitter">64</a></li>
                                    <li><a href="#" class="icon fa-facebook">128</a></li>
                                    <li><a href="#" class="icon fa-twitter">64</a></li>
                                    <li><a href="#" class="icon fa-facebook">128</a></li>
                                </ul>-->
            </div>
          
            
             <?php echo form_open('pessoas/inserir', 'id="form-pessoas"'); ?>

        <label for="nome">Nome:</label><br/>
        <input type="text" name="nome" value="<?php echo set_value('nome'); ?>"/>
        <div class="error"><?php echo form_error('nome'); ?></div>
        
        <label for="email">Email:</label><br/>
        <input type="email" name="email" value="<?php echo set_value('email'); ?>"/>
        <div class="error"><?php echo form_error('email'); ?></div>
        
        <label for="idade">Idade:</label><br/>
        <input type="number" name="idade" value="<?php echo set_value('idade'); ?>"/>
        <div class="error"><?php echo form_error('idade'); ?></div>
        
        <label for="foto">Foto:</label><br/>
        <input type="text" name="foto" value="<?php echo set_value('foto'); ?>"/>
        <div class="error"><?php echo form_error('foto'); ?></div>
        
        <label for="senha">Senha:</label><br/>
        <input type="password" name="senha" value="<?php echo set_value('senha'); ?>"/>
        <div class="error"><?php echo form_error('senha'); ?></div>
        
        <input type="submit" name="cadastrar" value="Cadastrar" />   

        <?php echo form_close(); ?>

       <div id="grid-pessoas">
            <ul>
                <?php foreach ($pessoas as $pessoa): ?>
                    <li>
                        <a title="Deletar" href="<?php echo base_url() . 'pessoas/deletar/' . $pessoa->idusuario; ?>" onclick="return confirm('Confirma a exclusão deste registro?')">
                        <img src="<?php echo base_url(); ?>assets/img/delete.png" />
                        </a>
                        <span> - </span>
                        <a title="Editar" href="<?php echo base_url() . 'pessoas/editar/' . $pessoa->idusuario; ?>"><?php echo $pessoa->nome; ?></a>
                        <span> - </span> 
                        <span><?php echo $pessoa->email; ?></span>
                        <span> - </span> 
                        <span> - </span>
                        <span> <img src="<?php echo $pessoa->foto; ?>" />
                        </span>                              
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        </article>



        <!-- Pagination -->

        <div class="pagination">
            <!--<a href="#" class="button previous">Previous Page</a>-->
            <!--<div class="pages">
                
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <span>&hellip;</span>
                <a href="#">20</a>
            </div>
            <a href="#" class="button next">Next Page</a>
            -->
        </div>


    </div>
</div>

