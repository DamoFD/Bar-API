import React from 'react'
import { DocsThemeConfig } from 'nextra-theme-docs'

const config: DocsThemeConfig = {
  logo: <span>Bar API</span>,

  navigation: true,

  project: {
    link: 'https://github.com/DamoFD/Bar-API',
  },

  useNextSeoProps() {
    return {
      titleTemplate: '%s – Bar API',
    }
  },

  docsRepositoryBase: 'https://github.com/DamoFD/Bar-API/blob/main/docs',

  footer: {
    text: 'Bar API © 2023 by DamoFD,
  },

}

export default config
