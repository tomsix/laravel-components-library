# Upgrading

Because there are many breaking changes an upgrade is not that easy. There are many edge cases this guide does not cover. We accept PRs to improve this guide.

## From v1 to v2

- The components are now loaded from a namespace and is using a prefix now. All components use a different name. `<x-form-input />` is now `<x-form::input />`
- The `input-attributes` array is removed. De extra attributes provided will now be used on the input instead of de div (form-group)
- The component File is removed. Use input with file as type
- The component Button is removed. Use an input or a button html-tag

