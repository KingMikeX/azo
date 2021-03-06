Full default annotations
========================

Param fetcher
-------------

QueryParam
~~~~~~~~~~

.. code-block:: php

    use FOS\RestBundle\Controller\Annotations\QueryParam;

    /**
     * @QueryParam(
     *   name="",
     *   key=null,
     *   requirements="",
     *   incompatibles={},
     *   default=null,
     *   description="",
     *   strict=false,
     *   map=false,
     *   nullable=false
     * )
     */

RequestParam
~~~~~~~~~~~~

.. code-block:: php

    use FOS\RestBundle\Controller\Annotations\RequestParam;

    /**
     * @RequestParam(
     *   name="",
     *   key=null,
     *   requirements="",
     *   default=null,
     *   description="",
     *   strict=true,
     *   map=false,
     *   nullable=false
     * )
     */

FileParam
~~~~~~~~~

.. code-block:: php

    use FOS\RestBundle\Controller\Annotations\FileParam;

    /**
     * @FileParam(
     *   name="",
     *   key=null,
     *   requirements={},
     *   default=null,
     *   description="",
     *   strict=true,
     *   nullable=false,
     *   image=false
     * )
     */

View
----

.. code-block:: php

    use FOS\RestBundle\Controller\Annotations\View;

    /**
     * @View(
     *  statusCode=null,
     *  serializerGroups={},
     *  serializerEnableMaxDepthChecks=false
     * )
     */

Routing
-------

Route
~~~~~

RestBundle extends the `@Route Symfony annotation`_. The following are shortcuts
to define routes limited to a specific HTTP method: ``@Delete``, ``@Get``,
``@Head``, ``@Link``, ``@Patch``, ``@Post``, ``@Put``, ``@Unlink``, ``@Lock``,
``@Unlock``, ``@PropFind``, ``@PropPatch``, ``@Move``, ``@Mkcol``, ``@Copy``.
All of them have the same options as ``@Route``.

Example:

.. configuration-block::

    .. code-block:: php-annotations

        // src/Controller/BlogController.php
        namespace App\Controller;

        use FOS\RestBundle\Controller\AbstractFOSRestController;
        use FOS\RestBundle\Controller\Annotations as Rest;

        class BlogController extends AbstractFOSRestController
        {
            /**
             * @Rest\Get("/blog", name="blog_list")
             */
            public function list()
            {
                // ...
            }
        }

    .. code-block:: php-attributes

        // src/Controller/BlogController.php
        namespace App\Controller;

        use FOS\RestBundle\Controller\AbstractFOSRestController;
        use FOS\RestBundle\Controller\Annotations as Rest;

        class BlogController extends AbstractFOSRestController
        {
            #[Rest\Get('/blog', name: 'blog_list')]
            public function list()
            {
                // ...
            }
        }

.. _`@Route Symfony annotation`: https://symfony.com/doc/current/routing.html
