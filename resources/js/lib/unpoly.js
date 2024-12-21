import 'unpoly/unpoly.min.js'
//import 'unpoly/unpoly-bootstrap5.min.js'
import _hyperscript from 'hyperscript.org';
import { toArray } from './utils/toArray';

/**
 * DOMContentLoaded
 *
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */
document.addEventListener("DOMContentLoaded", () => {
    const env = import.meta.env

    // _hyperscript.browserInit();

    up.fragment.config.mainTargets.push(['main'])

    up.on('click', function(event) {
        const target = event.target
        if (target.nodeName === 'INPUT') {
            if (target.classList.contains('is-invalid')) {
                target.classList.remove('is-invalid')
            }

            if (target.offsetParent.classList.contains('is-invalid')) {
                target.offsetParent.classList.remove('is-invalid')
            }
        }
    })

    /**
     * Following all links
     *
     * To follow all links on a page without requiring an [up-follow] attribute:
     * up.link.config.followSelectors.push('a[href]')
     */
    up.link.config.followSelectors.push(toArray(env.VITE_UP_CONFIG_LINK_FOLLOW_SELECTORS))

    /**
     * Preloading all links
     *
     * To preload all links on when hovering over them, without requiring an [up-preload] attribute:
     * up.link.config.preloadSelectors.push('a[href]')
     */
    up.link.config.preloadSelectors.unshift(toArray(env.VITE_UP_CONFIG_LINK_PRELOAD_SELECTORS))

    /**
     * Handling all forms
     *
     * To handle all forms on a page without requiring an [up-submit] attribute:
     * up.form.config.submitSelectors.push(['form'])
     */
    up.form.config.submitSelectors.push(toArray(env.VITE_UP_CONFIG_FORM_SUBMIT_SELECTORS))

   // const linkClosestFormLayer = env.VITE_UP_CONFIG_LINK_CLOSEST_FORM_LAYER

/*    if (['new modal', 'swap modal', 'new', 'swap', 'shatter'].includes(linkClosestFormLayer)) {
        up.on('up:link:follow up:link:preload', function(event, link) {
            if (link.closest('form')) {
                event.renderOptions.layer = linkClosestFormLayer
            }
        })
    }*/

    /**
     * Handling network issues
     *
     * https://unpoly.com/network-issues#disconnects
     */
    up.on('up:fragment:offline', function(event) {
        if (confirm('You are offline. Retry?')) event.retry()
        // up.render(event.renderOptions.target, { content: "You are offline." })
    })

    /**
     * Handling network issues
     *
     * https://unpoly.com/network-issues#disconnects
     */
		up.on('up:fragment:inserted', function(event) {
        setTimeout(() => {
            _hyperscript.browserInit();
        }, 800)
    })


    /**
     * The following would disable preloading on slow 2G connections:
     *
     * https://developer.mozilla.org/en-US/docs/Web/API/NetworkInformation
     */
    function disablePreloadingOnSlow2GConnections() {
        const isSlowConnection = () => navigator.connection && navigator.connection.effectiveType.includes('2g')

        up.on('up:link:preload', function(event) {
            if (isSlowConnection()) {
                event.preventDefault()
            }
        })
    }

    disablePreloadingOnSlow2GConnections()

    /**
     * Enable all log events
     *
     * up.log.enable() || up.log.disable()
     */
    up.log.config.enabled = JSON.parse(env.VITE_UP_CONFIG_LOG_ENABLE)

  /*  function isStylesheet(asset) {
        return asset.matches('link[rel=stylesheet]')
    }

    up.on('up:assets:changed', function({ oldAssets, newAssets }) {
        let oldStylesheets = up.util.filter(oldAssets, isStylesheet)
        for (let oldStylesheet of oldStylesheets) {
            oldStylesheet.remove()
        }

        let newStylesheets = up.util.filter(newAssets, isStylesheet)
        for (let newStylesheet of newStylesheets) {
            document.head.append(newStylesheet)
        }
    })*/
});
