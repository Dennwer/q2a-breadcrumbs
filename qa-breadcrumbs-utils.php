<?php

    /*
        Question2Answer (c) Gideon Greenspan
        Q2A Breadcrumbs (c) Amiya Sahu (developer.amiya@outlook.com)

        http://www.question2answer.org/


        File: qa-plugin/basic-adsense/qa-basic-adsense.php
        Version: See define()s at top of qa-include/qa-base.php
        Description: Widget module class for AdSense widget plugin


        This program is free software; you can redistribute it and/or
        modify it under the terms of the GNU General Public License
        as published by the Free Software Foundation; either version 2
        of the License, or (at your option) any later version.

        This program is distributed in the hope that it will be useful,
        but WITHOUT ANY WARRANTY; without even the implied warranty of
        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
        GNU General Public License for more details.

        More about this license: http://www.question2answer.org/license.php

    */

    /* don't allow this page to be requested directly from browser */
    if ( !defined( 'QA_VERSION' ) ) {
        header( 'Location: /' );
        exit;
    }

    /**
     * Returns the language html value as defined in lang file
     *
     * @param      $indentifier
     * @param null $subs
     *
     * @return mixed|string
     */
    function breadcrumb_lang( $indentifier, $subs = null )
    {
        if ( !is_array( $subs ) )
            return empty( $subs ) ? qa_lang_html( 'breadcrumbs/' . $indentifier ) : qa_lang_html_sub( 'breadcrumbs/' . $indentifier, $subs );
        else
            return strtr( qa_lang_html( 'breadcrumbs/' . $indentifier ), $subs );
    }

    /**
     * Returns the first element in an array.
     *
     * @param  array $array
     * @return mixed
     */

    function array_first( array $array )
    {
        return reset( $array );
    }

    /**
     * Returns the last element in an array.
     *
     * @param  array $array
     * @return mixed
     */
    function array_last( array $array )
    {
        return end( $array );
    }

    /**
     * Returns the first key in an array.
     *
     * @param  array $array
     * @return int|string
     */
    function array_first_key( array $array )
    {
        reset( $array );

        return key( $array );
    }

    /**
     * Returns the last key in an array.
     *
     * @param  array $array
     * @return int|string
     */
    function array_last_key( array $array )
    {
        end( $array );

        return key( $array );
    }

    /**
     * Checks wheather the provided key is the first key of the array
     *
     * @param array $array
     * @param $key
     * @return bool
     */
    function array_is_first_key( array $array, $key )
    {
        return array_first_key( $array ) == $key;
    }

    /**
     * Checks wheather the provided key is the first key of the array
     *
     * @param array $array
     * @param $key
     * @return bool
     */
    function array_is_last_key( array $array, $key )
    {
        return array_last_key( $array ) == $key;
    }