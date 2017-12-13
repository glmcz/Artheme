<?php
/**
 * Advanced Search Form
 * User: Filip Uhlir
 * Date: 20.01.2017
 * Time: 15:30
 */
?>


<div class="row" xmlns="http://www.w3.org/1999/html">
    <div class="col-md-12 col-xs-12 recent-header">
        <h5>Pokročilé Vyhledání</h5>
    </div>
    <div id="advanced-search" class="advanced-search">
        <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url(); ?>">
            <div class="form-element">
                <label for="search-input">Hledat</label>
                <input  id="search-input" class="" type="text" value="<?php the_search_query(); ?>" name="s"   />
            </div>


                <p>Filtrovat výsledky dle:</p>
            <div class="form-element">
                <label for="author">Autora</label>
                <input  id="author" class="" type="text" placeholder="Autor" value="" name="author"   />
            </div>
            <div class="form-element">
                <label for="category">Kategorie</label>

                <select id="category" name="category">
                    <option value="First Choice">Recenze</option>
                    <option value="Second Choice">Rozhovory</option>
                    <option value="Third Choice">Komentáře</option>
                    <option value="Fourth Choice">Fotoreport</option>
                    <option value="Fourth Choice">Aktuality</option>
                    <option value="Fourth Choice">Tiskové zprávy</option>
                    <option value="Fourth Choice">Doprovodné programy</option>
                    <option value="Fourth Choice">Monitoring médií</option>
                    <option value="Fourth Choice">Blogy</option>
                </select>
            </div>
            <div class="form-element">
                <label for="month">Data</label>
                <input  id="month" class="" type="month" placeholder="Datum" value="" name="datum"   />
            </div>
            <div class="form-element">
                <label for="tag">Tagu</label>
                <input  id="tag" class="" type="text" placeholder="tag" value="" name="author"   />
            </div>
                <input id="" class="" type="submit" value="Hledat">

        </form>
    </div>
</div>

