import EditorJS from '@editorjs/editorjs';

const editor = new EditorJS({
    holder: 'editorjs',
    tools: {
        header: {
            class: Header,
            config: {
                placeholder: 'Enter a header',
                levels: [2, 3, 4],
                defaultLevel: 3
            }
        },
        list: {
            class: List,
            inlineToolbar: true
        },
        embed: {
            class: Embed,
            config: {
                services: {
                    youtube: true,
                    coub: true
                }
            }
        },
        table: {
            class: Table,
            inlineToolbar: true
        },
        quote: {
            class: Quote,
            inlineToolbar: true,
            config: {
                quotePlaceholder: 'Enter a quote',
                captionPlaceholder: 'Quote\'s author'
            }
        },
        marker: {
            class: Marker,
            inlineToolbar: true
        },
        code: {
            class: CodeTool,
            config: {
                placeholder: 'Enter a code'
            }
        },
        delimiter: Delimiter,
        inlineCode: {
            class: InlineCode,
            config: {
                placeholder: 'Enter a code'
            }
        },
        paragraph: {
            class: Paragraph,
            inlineToolbar: true
        }
    }
});
