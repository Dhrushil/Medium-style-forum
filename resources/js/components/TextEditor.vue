<template>
  <v-card width="50%" style="left: 25%">
    <v-form>
    <div class="editor ma-5  @error('description')" id="description" name="description" placeholder="description">
      <editor-menu-bar :editor="editor" v-slot="{ commands, isActive }">
        <div class="menubar mb-5">
          <v-btn
            class="menubar__button"
            :class="{ 'is-active': isActive.bold() }"
            @click="commands.bold"
            text
            x-small
            fab
          >
            <v-img class="toolbar-icon" contain src="@/assets/039-bold.svg"></v-img>
          </v-btn>

          <v-btn
            class="menubar__button"
            :class="{ 'is-active': isActive.italic() }"
            @click="commands.italic"
            text
            x-small
            fab
          >
            <v-img class="toolbar-icon" contain src="@/assets/026-italic.svg"></v-img>
          </v-btn>

          <v-btn
            class="menubar__button"
            :class="{ 'is-active': isActive.strike() }"
            @click="commands.strike"
            text
            x-small
            fab
          >
            <v-img class="toolbar-icon" contain src="@/assets/011-strike.svg"></v-img>
          </v-btn>

          <v-btn
            class="menubar__button"
            :class="{ 'is-active': isActive.underline() }"
            @click="commands.underline"
            text
            x-small
            fab
          >
            <v-img class="toolbar-icon" contain src="@/assets/002-underline.svg"></v-img>
          </v-btn>

          <v-btn
            class="menubar__button"
            :class="{ 'is-active': isActive.code() }"
            @click="commands.code"
            text
            x-small
            fab
          >
            <v-img class="toolbar-icon" contain src="@/assets/008-superscript.svg"></v-img>
          </v-btn>

          <v-btn
            class="menubar__button"
            :class="{ 'is-active': isActive.paragraph() }"
            @click="commands.paragraph"
            text
            x-small
            fab
          >
            <v-img class="toolbar-icon" contain src="@/assets/017-paragraph.svg"></v-img>
          </v-btn>

          <v-btn
            class="menubar__button"
            :class="{ 'is-active': isActive.heading({ level: 1 }) }"
            @click="commands.heading({ level: 1 })"
            text
            x-small
            fab
          >H1</v-btn>

          <v-btn
            class="menubar__button"
            :class="{ 'is-active': isActive.heading({ level: 2 }) }"
            @click="commands.heading({ level: 2 })"
            text
            x-small
            fab
          >H2</v-btn>

          <v-btn
            class="menubar__button"
            :class="{ 'is-active': isActive.heading({ level: 3 }) }"
            @click="commands.heading({ level: 3 })"
            text
            x-small
            fab
          >H3</v-btn>

          <v-btn
            class="menubar__button"
            :class="{ 'is-active': isActive.heading({ level: 4 }) }"
            @click="commands.heading({ level: 4 })"
            text
            x-small
            fab
          >H4</v-btn>

          <v-btn
            class="menubar__button"
            :class="{ 'is-active': isActive.heading({ level: 5 }) }"
            @click="commands.heading({ level: 5 })"
            text
            x-small
            fab
          >H5</v-btn>

          <v-btn
            class="menubar__button"
            :class="{ 'is-active': isActive.bullet_list() }"
            @click="commands.bullet_list"
            text
            x-small
            fab
          >
            <v-img class="toolbar-icon" contain src="@/assets/037-bullet-list.svg"></v-img>
          </v-btn>

          <v-btn
            class="menubar__button"
            :class="{ 'is-active': isActive.ordered_list() }"
            @click="commands.ordered_list"
            text
            x-small
            fab
          >
            <v-img class="toolbar-icon" contain src="@/assets/021-list.svg"></v-img>
          </v-btn>

          <v-btn
            class="menubar__button"
            :class="{ 'is-active': isActive.blockquote() }"
            @click="commands.blockquote"
            text
            x-small
            fab
          >
            <v-img class="toolbar-icon" contain src="@/assets/015-quote.svg"></v-img>
          </v-btn>

          <v-btn
            class="menubar__button"
            :class="{ 'is-active': isActive.code_block() }"
            @click="commands.code_block"
            text
            x-small
            fab
          >
            <v-img class="toolbar-icon" contain src="@/assets/034-coding.svg"></v-img>
          </v-btn>

          <v-btn class="menubar__button" @click="commands.horizontal_rule" text x-small fab>
            <v-img class="toolbar-icon" contain src="@/assets/036-spacing.svg"></v-img>
          </v-btn>

          <v-btn class="menubar__button" @click="commands.undo" text x-small fab>
            <v-img class="toolbar-icon" contain src="@/assets/001-undo.svg"></v-img>
          </v-btn>

          <v-btn class="menubar__button" @click="commands.redo" text x-small fab>
            <v-img class="toolbar-icon" contain src="@/assets/013-redo.svg"></v-img>
          </v-btn>

        </div>
      </editor-menu-bar>

      <editor-floating-menu :editor="editor" v-slot="{ commands, isActive, menu}">
        <div
          class="editor__floating-menu"
          :class="{ 'is-active': menu.isActive }"
          :style="`top: ${menu.top}px`"
        >
          <v-btn
          class="menubar__button"
          :class="{ 'is-active': isActive.heading({ level: 1 }) }"
          @click="commands.heading({ level: 1 })"
          text
          x-small
          fab
        >
          H1
        </v-btn>

        <v-btn
          class="menubar__button"
          :class="{ 'is-active': isActive.heading({ level: 2 }) }"
          @click="commands.heading({ level: 2 })"
          text
          x-small
          fab
        >
          H2
        </v-btn>

        <v-btn
          class="menubar__button"
          :class="{ 'is-active': isActive.heading({ level: 3 }) }"
          @click="commands.heading({ level: 3 })"
          text
          x-small
          fab
        >
          H3
        </v-btn>

        <v-btn
          class="menubar__button"
          :class="{ 'is-active': isActive.heading({ level: 4 }) }"
          @click="commands.heading({ level: 4 })"
          text
          x-small
          fab
        >
          H4
        </v-btn>

        <v-btn
          class="menubar__button"
          :class="{ 'is-active': isActive.heading({ level: 5 }) }"
          @click="commands.heading({ level: 5 })"
          text
          x-small
          fab
        >
          H5
        </v-btn>
        <v-btn
            class="menubar__button"
            :class="{ 'is-active': isActive.code_block() }"
            @click="commands.code_block"
            text
            x-small
            fab
          >
            <v-img class="toolbar-icon" contain src="@/assets/034-coding.svg"></v-img>
          </v-btn>
        </div>
        
      </editor-floating-menu>

      <editor-content class="editor__content summary" :editor="editor" id="summary"/>
    </div>
    <v-btn color="success" type="submit">Submit</v-btn>
    </v-form>
  </v-card>
</template>

<script>
import {
  Editor,
  EditorContent,
  EditorMenuBar,
  EditorFloatingMenu
} from "tiptap";
import {
  Blockquote,
  CodeBlock,
  HardBreak,
  Heading,
  HorizontalRule,
  OrderedList,
  BulletList,
  ListItem,
  TodoItem,
  TodoList,
  Bold,
  Code,
  Italic,
  Link,
  Strike,
  Underline,
  History,
  Image,
  TrailingNode,
  
} from "tiptap-extensions";

export default {
  components: {
    EditorContent,
    EditorMenuBar,
    EditorFloatingMenu
  },
  data() {
    return {
      editor: new Editor({
        extensions: [
          
          new Blockquote(),
          new BulletList(),
          new CodeBlock(),
          new HardBreak(),
          new Heading({ levels: [1, 2, 3] }),
          new HorizontalRule(),
          new ListItem(),
          new OrderedList(),
          new TodoItem(),
          new TodoList(),
          new Link(),
          new Bold(),
          new Code(),
          new Italic(),
          new Strike(),
          new Underline(),
          new History(),
          new Image(),
          new TrailingNode({
            node: 'paragraph',
            notAfter: ['paragraph'],
          }),
        ],
        content: `
          <h1>
            Hi there,
          </h1>
          <p>
            welcome to your first VueLearn blog entry.
          </p>
          <pre><code></code></pre>
          
        `
      })
    };
  },
  beforeDestroy() {
    this.editor.destroy();
  },
  methods: {
    showImagePrompt(command) {
      const src = prompt("Enter the url of your image here");
      if (src !== null) {
        command({ src });
      }
    }
  }
};
</script>


<style lang="scss">
.toolbar-icon {
  width: 2em;
  height: 2em;
}

.editor {
  position: relative;
  max-width: 100%;
  margin: 0 auto 5rem auto;

  &__floating-menu {
    position: absolute;
    z-index: 1;
    margin-top: -0.25rem;
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.2s, visibility 0.2s;

    &.is-active {
      opacity: 1;
      visibility: visible;
    }
  }

  &__content {
    overflow-wrap: break-word;
    word-wrap: break-word;
    word-break: break-word;
    

    pre {
      padding: 0.7rem 1rem;
      border-radius: 5px;
      font-size: 0.8rem;
      background: #23272A;
      color: white;
      overflow-x: auto;
      code {
        display: block;
        background: #2C2F33;
        color: white;
        
      }
    
    }
    p code {
      padding: 0.2rem 0.4rem;
      border-radius: 5px;
      font-size: 0.8rem;
      font-weight: bold;
      background: rgba(rgba(8, 0, 0, 0.829), 0.1);
      color: rgba(rgb(255, 0, 0), 0.8);
    }
    ul,
    ol {
      padding-left: 1rem;
    }

    li > p,
    li > ol,
    li > ul {
      margin: 0;
    }

    a {
      color: inherit;
    }

    blockquote {
      border-left: 3px solid rgba(black, 0.1);
      color: rgba(black, 0.8);
      padding-left: 0.8rem;
      font-style: italic;

      p {
        margin: 0;
      }
    }

    img {
      max-width: 100%;
      border-radius: 3px;
    }

    table {
      border-collapse: collapse;
      table-layout: fixed;
      width: 100%;
      margin: 0;
      overflow: hidden;

      td,
      th {
        min-width: 1em;
        border: 2px solid grey;
        padding: 3px 5px;
        vertical-align: top;
        box-sizing: border-box;
        position: relative;
        > * {
          margin-bottom: 0;
        }
      }

      th {
        font-weight: bold;
        text-align: left;
      }

      .selectedCell:after {
        z-index: 2;
        position: absolute;
        content: "";
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: rgba(200, 200, 255, 0.4);
        pointer-events: none;
      }

      .column-resize-handle {
        position: absolute;
        right: -2px;
        top: 0;
        bottom: 0;
        width: 4px;
        z-index: 20;
        background-color: #adf;
        pointer-events: none;
      }
    }

    .tableWrapper {
      margin: 1em 0;
      overflow-x: auto;
    }

    .resize-cursor {
      cursor: ew-resize;
      cursor: col-resize;
    }

    &__floating-menu {
      position: absolute;
      z-index: 1;
      margin-top: -0.25rem;
      visibility: hidden;
      opacity: 0;
      transition: opacity 0.2s, visibility 0.2s;

      &.is-active {
        opacity: 1;
        visibility: visible;
      }
    }
  }
}
</style>
